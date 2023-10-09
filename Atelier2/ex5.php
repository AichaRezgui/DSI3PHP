<?php
$ch = "institut supérieur des etudes technologiques ";
echo $ch . "</br>";
$ch1 = ucwords($ch);
echo $ch1 . "</br>";
$mots = explode(' ', $ch1);

foreach ($mots as &$val) {
    $val = substr($val, 0, 1);
}

$res = implode('', $mots);
echo $res;
?>
