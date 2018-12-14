<?php
$n=10;
$fact=3628800;
//Перестановка
$perm="0123456789";

    for ($i=1; $i != $fact+1; $i++) {

				print $perm . "---\n";
				/*Вращение: убирает часть делений по модулю
				 * Заметим, что в циклах также увеличивается i*/
				$z=$i;
				for ($i; $i != $n+$z-1; $i++) {
				$sw=$perm[0];
			   	 for ($j=0; $j<$n-1; $j++) $perm[$j]=$perm[$j+1];
				$perm[$n-1]=$sw;
				print $perm . "\n";
				}
			/*Этот блок выполняется (n-1)! раз, а не n! раз*/
			$mm = $i;
			$m=$n;
			while ($m > 0) {
			if ($mm%$m==0)  {
				$mm /= $m--;
				continue;
			}
			$perm=substr($perm,  $n-$m+1).strrev(substr($perm, 0, $n-$m+1));
			continue 2;
			}
}

?>
