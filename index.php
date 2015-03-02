<?php

header('Content-type: text/html; charset=utf-8');
error_reporting(E_ALL);
// Lesson 3

//echo date('d.m.Y H:i:s', mktime(0,0,0,1,1,70))."\n";       //print zero of timestemp

$date = array();
mt_srand(time());
for ($i = 0; $i <= 4; $i++) {              //fill $date by 5 element of random timestamp
    $date[$i] = mt_rand(0, time());
}

//SOLUTION #1
foreach ($date as $value) {                //print $date in data-format
    echo date('D, d.m.Y H:i:s', $value) . "\n";
}
$days = array();                            
$months = array(); 

foreach ($date as $value) {                 
    $days[] = (int) date('d', $value);      //parse $date by day in $days
    $months[] = (int) date('m', $value);    //parse $date by month in $months
}
echo "<br>Min day: ".min($days)."\n";       //print min of $days

$month = max($months);
echo "<br>Max month: ".$month.'='. date('F', mktime(0,0,0,$month,1))."\n";          //print max of $month

////SOLUTION #2
//
//foreach ($date as $value) {                         //print $date in data-format
//    echo date('D, d.m.Y H:i:s', $value) . "\n";
//}
//echo"____________________\n";
//
//function sortByDay($a,$b)                           
//{
//    if ((int)date('d',$a) == (int)date('d',$b)){
//        return 0;
//    }
//    return ((int)date('d',$a) < (int)date('d',$b)) ? -1 : 1;
//}
//function sortByMonth($a,$b)
//{
//    if ((int)date('m',$a) == (int)date('m',$b)){
//        return 0;
//    }
//    return ((int)date('m',$a) < (int)date('m',$b)) ? -1 : 1;
//}
//
//usort($date, "sortByDay");
//echo "<br>Min day: ".(int)date('d',$date[0])."\n";
//
//usort($date, "sortByMonth");
//echo "<br>Max month: ".(int)date('m',$date[count($date)-1])."=".date('F',$date[count($date)-1])."\n";

//foreach ($date as $value) {                //print $date in data-format
//    echo date('D, d.m.Y H:i:s', $value) . "\n";
//}

sort($date);                                //sort $date from lowest to highest
//echo var_dump($date);

$selected = array_pop($date);               //cut last element $date to $selected
//echo var_dump($date);
//echo var_dump($selected);

echo "<br>\$selected = " . date('d.m.Y H:i:s', $selected)."\n";    //print $selected in data-format

date_default_timezone_set('America/New_York');
echo "<br>\$selected (in NY) = " . date('d.m.Y H:i:s', $selected)."\n";  //print $selected in NY-timezone
echo "<br>New Timezone is ".  date_default_timezone_get();

?>
