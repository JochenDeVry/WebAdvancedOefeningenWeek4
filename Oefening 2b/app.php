<?php
require_once 'vendor/autoload.php';
use Util\Date;

$date1=Date::make();
$date2=Date::make(1,2);
$date3=Date::make(1,2,2001);
print($date1);
print($date2);
print($date3);
$date4=$date3->changeDay(9);
print($date1);
print($date2);
print($date3);
print($date4);