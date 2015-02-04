<?php
class Download{
	const URL_MAX_LENGTH=2050;
	
	protected function cleanUrl($url){
		if(isset($url)){
			if(!empty($url)){
				//echo strlen($url);
				if(strlen($url) < self::URL_MAX_LENGTH){
					return strip_tags($url);
				}
			}
		}
	}
	
	protected function isUrl($url){
		$ur = $this->cleanUrl($url);
			if(isset($url)){
				if(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)){
					return $url;
				}
			}
	}
	
	protected function returnExtension($url){
		if($this->isUrl($url)){
			$end =end(preg_split("/[.]+/", $url));
				if(isset($end)){
					return $end;
				}
		}
	}
	
	public function downloadFile($url){
		//echo "url is".$url;die;
		if($this->cleanUrl($url)){
			$extension =$this->returnExtension($url);
				if($extension){
					//echo $url;
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
			$return =curl_exec($ch);
			curl_close($ch);
			
			$destination ="upload/file.$extension";
			$file =fopen($destination,"w+");
			fputs($file,$return);
				if(fclose($file)){
					//echo "File uploaded";
					
					}
				}	
				
		}
	}
}
$obj = new Download();
if(isset($_POST['url'])){$url =$_POST['url'];}
?>

<html>
	<head>
		<title>uplaod file</title>
	</head>
<body>
	<form action="http://localhost/curl/index.php" method="post">
		<input type="text" name="url" maxlength="2000"/>
		&nbsp;
		<input type="submit" value="download" />
	</form>
	<div style="padding-top: 40px;">
			<?php 
			$filename="file.jpg";?>
			
		<img src="upload/<?php echo $filename;?>" width="40" height="40"/>
		
	</div>
	<div style="padding-top: 20px;">
	<?php  echo basename($url);?>
	</div>
</body>
</html>


<?php  if(isset($url)){ $obj->downloadFile($url);}?>