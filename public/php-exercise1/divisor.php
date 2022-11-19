<?php
function getRemainder($num, $divisor)
{
	if ($divisor == 0)
	{
		echo "Error: divisor can't be zero \n";
		return -1;
	}
  if ($divisor < 0) $divisor = -$divisor;
	if ($num < 0)	 $num = -$num;

	$i = 1;
	$product = 0;
	while ($product <= $num)
	{
		$product = $divisor * $i;
		$i++;
	}

		return $num - ($product - $divisor);
}

echo getRemainder(100, 7);
?>
