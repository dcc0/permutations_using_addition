<?php
//Алфавит -  перестановка, то есть начало
$alphabet="1234567";
$counter=0;
//Читаем мы построчно с теринала

    while (($buffer = fgets(STDIN, 255)) !== false) {
//Массив строкой мы обратим
		$array = preg_split('//', $buffer, -1, PREG_SPLIT_NO_EMPTY);

//Теперь мы счетчик обнулим
		$counter=0;
//Уникальные теперь проверим мы
        for ($i=0; $i!=strlen($alphabet)-1; $i++)  {
		if (in_array($alphabet[$i], $array)) ++$counter;
		}
//И если уникальных ровно столько, сколько в алфавите
		if ($counter==strlen($alphabet)-1)
//Печатаем! Не спите!
		print_r($array);
    }
?>
