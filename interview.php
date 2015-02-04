<?php
// hello avnish
for($i=1;$i<=8;$i++){

	for($j=8;$j>=$i;$j--){
		echo "&nbsp;&nbsp";
	}

	for($k=1;$k<=$i;$k++){
		echo "* &nbsp";
	}
	echo "<br>";
} 

echo "<br>";

for($i=1;$i<=5;$i++){
	 for($j=1;$j<=$i;$j++){
	echo "*";
	}
	echo "<br>";
}
for($k=1;$k<=5;$k++){

	for($q=5;$q>=$k;$q--){
		echo "*";
	}
	echo "<br>";
}

echo "<br>";


for($i=1;$i<=5;$i++){
	for($j=1;$j<=$i;$j++){
			if($i % 2 ==0){
				$temp =$j+1;
				 echo "$temp";
			}else{
			echo "$j";
		}

			
		}
	echo "<br>";
	}
		echo "<br>";

for($i=0;$i<5;$i++){
for($j=5-$i;$j<=5;$j++){
    echo $j;
}
echo "<br>";
}

echo "<br>";

 


$k=1;
for($i=0;$i<5;$i++){
	for($j=0;$j<=$i;$j++){
		echo $k." ";
			$k++;
		}
	echo "<br>";
}




