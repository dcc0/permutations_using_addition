<?php
//012 - алфавит. 6!. По формуле найдем N = 2*3^2 + 1*3^1 + 0*3^0 = 21
//Или для 0123. 4-е объекта. Последовательность
//по формуле Франца Германа последовательность:  3*4^3+2*4^2+1*4^1+0*4^0=228
$n=228;
$i=0;
$sys=4; //Система счисления
$alphabet="0123";
$stop=base_convert($alphabet, $sys, 10) . "\n";

    while ($n >= $stop) {
		//Переведем n в 3-ную систему
	$permutation=base_convert($n, 10, $sys) . "\n";

		//Допишем нули в начало, если длина не равна n
	if (strlen($permutation) < $sys+1)
	$permutation="0".$permutation;
		
	    	//Конвертирование строки в массив
		$array = preg_split('//', $permutation, -1, PREG_SPLIT_NO_EMPTY);
		$counter=0;
        //Проверка на уникальность, если символ есть в массиве, увеличим счетчик
        for ($j=0; $j!=strlen($alphabet); $j++)  {
		if (in_array($alphabet[$j], $array)) ++$counter;
		}
        //Печать
		if ($counter==strlen($alphabet))
		print ($permutation);

	$n-=$sys-1;
	$i++;
    }
?>
