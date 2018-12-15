<?php
$n=11;
$i=39916800;
$perm="abcdefghijk";

    while ($i--) {
			print $perm . "\n";
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
