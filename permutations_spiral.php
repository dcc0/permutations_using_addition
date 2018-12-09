<?php
$n = 7;
$fact = 5040;
$perm = "1234567";

for ($i = 1; $i != $fact + 1; $i++)
	{
	print $perm . "\n";
	$mm = $i;
	$m = $n;
	while ($m > 0)
		{
		if ($mm % $m == 0)
			{
			$mm/= $m--;
			}
		  else
			{
			$perm = substr($perm, $n - $m + 1) . strrev(substr($perm, 0, $n - $m + 1));
			continue2;
			}
		}
	}

?>
