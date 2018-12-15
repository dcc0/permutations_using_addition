<?php
$n=4;
$i=25; /*n!=24(+1 так как декремент префиксный) */
$perm="1234";
    while (--$i) {
			print $perm . "\n";
			$mm = $i;
			$m=$n;
			while ($m > 0) {
			if ($mm%$m==0) {
				$mm /= $m--;
				continue;
				}
			$perm=substr($perm,  $n-$m+1).strrev(substr($perm, 0, $n-$m+1));
			break;
	}
}
?>
