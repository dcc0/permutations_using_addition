<?php
/*Random generating all unique permutations. Very slow */
	$n=4;
	$fact=24;
	$arr=array();
	$i=1;

	while (++$i) {
		for ($j=0; $j !=$n; $j++)
		$temp[]=rand(1, $n);

		if (count(array_unique($temp))==$n)
		$arr[]=implode('', $temp);

		if (count(array_unique($arr))==$fact) break;
	unset($temp);
	}

	print_r(array_unique($arr));
?>
