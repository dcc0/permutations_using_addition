<?php
	$n=7;
	$fact=5040;
	$arr=array();
	$i=1;

	while (++$i) {
		for ($j=0; $j !=$n; $j++) {
		$temp[]=rand(1, $n);
		$var.=rand(1, $n);
		}
		if (count(array_unique($temp))==$n && !in_array($var, $arr)) {
		$arr[]=implode('', $temp);
		print (implode('', $temp) . "\n");
		}

		if (count($arr)==$fact) break;
	unset($temp);
	$var="";
	}

	print_r(array_unique($arr));
	echo 'Циклов: ' . $i;
?>
