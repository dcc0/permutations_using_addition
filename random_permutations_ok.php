<?php
			$n=7;
			$fact=5040;
			$arr=array();
			$i=0;
			$value=null;
		
		
			while (count($arr)!=$fact) {
		
				for ($j=0; $j !=$n; $j++) {
				$var=rand(1, $n);
				$value.=$var;
				$temp[]=$var;
				}
		      /*Поиск уникальных. Условие добавления - отсутствие ключа в массиве*/
				if (count(array_unique($temp))==$n && !array_key_exists($value, $arr))
				$arr[$value]=$i++;
				//print ($value . "\n");
		
			unset($temp);
			$var="";
			$value="";
		
			}
		/*Печатаем ключи массива, они и есть перестановки*/
			foreach ($arr as $k => $v)
			print ($k . "\n");
		
?>
		
