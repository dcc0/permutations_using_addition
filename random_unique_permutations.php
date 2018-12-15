<?php
	$n=5;
	$fact=120;
	$arr=array();
	$i=1;

	while (++$i) {
		for ($j=0; $j !=$n; $j++)
		$temp[]=rand(1, $n);

		if (count(array_unique($temp))==$n && !in_array(implode('', $temp), $arr))
		$arr[]=implode('', $temp);

		if (count(array_unique($arr))==$fact) break;
	unset($temp);
	}

	print_r(array_unique($arr));
?>
