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

				if (count(array_unique($temp))==$n && !isset($arr[$value]))
				$arr[$value]=$i++;
				//print ($value . "\n");

			unset($temp);
			$var="";
			$value="";

			}

			foreach ($arr as $k => $v)
			print ($k . "\n");

?>
