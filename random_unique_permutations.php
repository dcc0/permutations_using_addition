<?php
	$n=8;
	$fact=40320;
	$arr=array();
	$i=1;

	while (++$i) {
		for ($j=0; $j !=$n; $j++) {
		$var=rand(1, $n);
		$value.=$var;
		$temp[]=$var;
		}
		if (count(array_unique($temp))==$n && !in_array($value, $arr)) {
		$arr[]=$value;
		print ($value . "\n");
		}

		if (count($arr)==$fact) break;
	unset($temp);
	$var="";
	$value="";
	}

	print_r(array_unique($arr));
	echo $i;
?>
