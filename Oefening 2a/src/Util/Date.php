<?php

namespace Util;

class Date
{
    private $day;
    private $month;
    private $year;
    private static $MONTHS = ['jan','feb','mar','apr','may','jun','jul','aug','sep','oct','sep','nov','dec'];

    public function __construct(int $day = 1, int $month = 1, int $year = 2008)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
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

    public function setDay($day)
    {
        $this->day = $day;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function setMonth($month)
    {
        $this->month = $month;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }


}