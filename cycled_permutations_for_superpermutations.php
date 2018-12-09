<?php
$n = 4;
$fact = 24;
$perm = "1234";
$seq = "123";

for ($i = 1; $i != $fact + 1; $i++)
	{
	print $perm . "\n";
	$seq.= $perm[$n - 1];
	$mm = $i;
	$m = $n;
	while ($m > 0)
		{
		if ($mm % $m == 0)
			{
			$mm/= $m--;
			print ("-----\n");
			$seq.= '.';
			}
		  else
			{
			$tail = strrev(substr($perm, 0, $n - $m + 1));
			$head = substr($perm, $n - $m + 1);
			$perm = $head . $tail;
			continue 2;
			}
		}

	$sw = $perm[0];
	for ($j = 0; $j < $n - 1; $j++) $perm[$j] = $perm[$j + 1];
	$perm[$n - 1] = $sw;
	}

print "\n" . $seq;
?>
