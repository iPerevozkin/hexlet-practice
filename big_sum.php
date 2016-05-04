<?php



function arrangeBiggestNumber ($massiv) {
  if (empty($massiv)) { return;}
  $test = $massiv;
	$massivSort = usort($test, function ($a, $b) {

    return ($a.$b < $b.$a) ? -1 : 1;
});


 $result = array_reduce(array_reverse($test), function ($acc, $item) {
	 return $acc .= $item;
});
  return $result;
}

print_r(arrangeBiggestNumber([1, 34, 3, 98, 9, 76, 45, 4]));
