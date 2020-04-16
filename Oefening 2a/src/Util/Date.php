<?php

namespace Util;

class Date
{
    private $day;
    private $month;
    private $year;
    private static $defaultDay = 1;
    private static $defaultMonth = 1;
    private static $defaultYear = 2008;
    private static $MONTHS = ['jan','feb','mar','apr','may','jun','jul','aug','sep','oct','sep','nov','dec'];

    public function __construct(int $day, int$month, int $year)
    {
        /*$arg_list = func_get_args();
        $numargs = func_num_args();
        if ($numargs == 0 ){
            $this->day = self::$defaultDay;
            $this->month = self::$defaultMonth;
            $this->year = self::$defaultYear;
        }
        elseif ($numargs == 2){
            $this->day = $arg_list[0];
            $this->month = $arg_list[1];
            $this->year = self::$defaultYear;
        }
        elseif ($numargs == 3){
            $this->day = $arg_list[0];
            $this->month = $arg_list[1];
            $this->year = $arg_list[2];
        }
        else{
            throw new \Exception("number of parameters for Date creation incorrect");
        }*/
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function __toString(){
        return $this->day.'/'.$this->month.'/'.$this->year;
    }

    public function printMonth(){
        print($this->day.'/'.self::$MONTHS[$this->month - 1].'/'.$this->year);
        print('printmonth function');
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