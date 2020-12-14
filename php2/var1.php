<?php
$many = 1000;
$percent = 1.5;
$months = 12;
$sum = $many;

for ($i = 1; $i <= $months; $i++) {
    $sum = $sum + ($sum * $percent / 100) / 12;
    echo "month=" . $i . " sum=" . $sum . "<br>";
}
echo round($sum, 2); // оператор for
// 
?>

<?php
echo "<br\n>"; //предусловие
$many = 1000;
$percent = 1.5;
$months = 12;
$sum = $many;
$i = 1;
while ($i <= $months) {

    $sum = $sum + ($sum * $percent / 100) / 12;
    $i++;
    echo "months=" . $i . "Sum=" . $sum . "<br>";
}

echo round($sum, 2);
?>

<?php

echo "<br\n>"; //постусловие
$many = 1000;
$percent = 1.5;
$months = 12;
$sum = $many;
$i = 1;
do {
    $sum = $sum + ($sum * $percent / 100) / 12;
    $i++;
    echo "monts=" . $i . "Sum=" . $sum . "<br>";
} while ($i <= $months);
echo round($sum, 2);
?>

<?php
echo "<br\n>";// for
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    echo "<br\n>";
}
?>

<?php
echo "<br\n>"; //while
$i = 1;
while ($i <= 10) {
    echo $i;
    echo "<br\n>";
    $i++;
}
?>

<?php
echo "<br\n>";// do while
$i = 1;
do {
    echo $i;
    echo "<br\n>";
    $i++;
} while ($i <= 10);
