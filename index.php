<?php
header('Content-type: text/html; charset=utf-8');
error_reporting(E_ALL);
// Lesson 3

$date = array();
mt_srand(time());
for ($i = 0; $i <= 4; $i++){                //fill $date by 5 element of random timestamp
    $date[$i] = mt_rand(0, time());
}
//echo var_dump($date);

echo "<br>Min date: ".date('D, d.m.Y H:m:s', min($date));   //print min & max days
echo "<br>Max date: ".date('D, d.m.Y H:m:s', max($date));

sort($date);                                //sort $date from lowest to highest
//echo var_dump($date);

$selected = array_pop($date);               //cut last element $date to $selected
//echo var_dump($date);
//echo var_dump($selected);

echo "<br>\$selected = ".date('d.m.Y H:m:s', $selected);    //print $selected in data-format

date_default_timezone_set('America/New_York');
echo "<br>\$selected (in NY) = ".date('d.m.Y H:m:s', $selected);  //print $selected in NY-timezone
?>
