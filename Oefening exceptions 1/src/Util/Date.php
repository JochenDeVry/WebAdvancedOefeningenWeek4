<?php

namespace Util;

class Date
{
    private $day;
    private $month;
    private $year;
    private static $MONTHS = ['jan','feb','mar','apr','may','jun','jul','aug','sep','oct','sep','nov','dec'];

    private function __construct(int $day, int $month, int $year)
    {
        if ($day > 31 || $day < 0) {
            throw new DateException("Value for day must be in range 1-31, 0 is default value");
        }
        elseif ( $month > 12 || $month <0){
            throw new DateException("Value for month must be in range 1-12, 0 is default value");
        }
        elseif ( $year < 0){
            throw new DateException("Value for year must not be negative, 0 is default value");
        }
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public static function make(int $day = 1, int $month = 1, int $year = 2008){
        return new Date($day, $month, $year);
    }

    public function __toString(){
        return $this->day.'/'.$this->month.'/'.$this->year;
    }

    public function printMonth(){
        print($this->day.'/'.self::$MONTHS[$this->month - 1].'/'.$this->year);
    }

    public function getDay()
    {
        return $this->day;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function changeDay($day){
        return new Date($day, $this->month, $this->year);
    }

    public function changeMonth($month){
        return new Date($this->day, $month, $this->year);
    }

    public function changeYear($year){
        return new Date ($this->day, $this->month, $year);
    }
}