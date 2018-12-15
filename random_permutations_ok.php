<?php
			$n=4;
			$fact=24;
			$arr=array();
			$i=0;
			$key=null;


			while (count($arr)!=$fact) {

				for ($j=0; $j !=$n; $j++) {
				$var=rand(1, $n);
				$key.=$var;
				$temp[]=$var;
				}

				if (count(array_unique($temp))==$n && !isset($arr[$key]))
				$arr[$key]=$i++;
				//print ($key . "\n");

			unset($temp);
			$var="";
			$key="";

			}

			foreach ($arr as $k => $v)
			print ($k . "\n");

?>
