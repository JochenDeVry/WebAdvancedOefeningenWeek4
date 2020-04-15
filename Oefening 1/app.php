<?php
require_once 'vendor/autoload.php';
use tool\Broom;
use worker\Handyman;
$broom = new Broom();
$henry = new Handyman($broom);
$henry->work();