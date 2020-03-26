<?php
function find($angka) {
  $odds = [];
  $evens = [];
  foreach ($angka as $item) {
    if ($item % 2) array_push($odds, $item);
    else array_push($evens, $item);
  }
  return count($evens) === 1 ? $evens[0] : $odds[0];
}
echo find(array('2', '4', '0', '100', '4', '11', '2602', '36' ));
?>