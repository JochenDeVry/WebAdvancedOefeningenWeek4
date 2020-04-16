<?php
require_once 'vendor/autoload.php';
use util\Color;
use util\ColorPoint;

$point = ColorPoint::make(1,2,Color::RED);
print($point);