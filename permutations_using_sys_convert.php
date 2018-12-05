<?php
//012 - алфавит. 6!. По формуле найдем N1 = 2*3^2 + 1*3^1 + 0*3^0 = 21
$n=21;
$i=0;
$sys=3; //Система счисления
$alphabet="012";
$stop=base_convert($alphabet, $sys, 10) . "\n";

    while ($n >= $stop) {
		//Переведем n в 3-ную систему
	$permutation=base_convert($n, 10, $sys) . "\n";

		//Допишем нули в начало, если длина не равна n
	if (strlen($permutation) < $sys+1)
	$permutation="0".$permutation;

		$array = preg_split('//', $permutation, -1, PREG_SPLIT_NO_EMPTY);
		$counter=0;
        //Проверка на уникальность
        for ($j=0; $j!=strlen($alphabet); $j++)  {
		if (in_array($alphabet[$j], $array)) ++$counter;
		}
        //Печать
		if ($counter==strlen($alphabet))
		print ($permutation);

	$n-=2;
	$i++;
    }
?>
