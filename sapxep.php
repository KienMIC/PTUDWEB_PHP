<?php
$arr = array(1,4,6,8,12,45,74,90,5,16);
echo "Day ban dau: ";
foreach ($arr as $item) {
	echo $item;                                                                                                            
	echo " ";
}
$arrlength = count($arr);
for ($i=0;$i<$arrlength-1;$i++) {
	for($j=$i+1;$j<$arrlength;$j++){
		if($arr[$i] %2 == 0 && $arr[$j]%2==0 && $arr[$i]>$arr[$j]){
			$tg = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $tg;
		}
	}
}
echo "<br> Day sau sap xep: ";
foreach ($arr as $item) {
	echo $item;
	echo " ";
}
?>