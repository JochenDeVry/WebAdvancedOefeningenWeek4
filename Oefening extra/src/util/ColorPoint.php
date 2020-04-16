<?php
namespace util;

final class ColorPoint
{
    private $x;
    private $y;
    private $color;
    const MAXIMUM_XY = 100;

    private function __construct($x, $y, $color)
    {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
    }

    public static function make($x, $y, $color){
        return new ColorPoint($x, $y, $color);
    }

    function __toString()
    {
        return "($this->x , $this->y, $this->color)";
    }


    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function calculateDistance(ColorPoint $point)
    {
        return sqrt( ($this->x-$point->x)*($this->x-$point->x)+
            ($this->y-$point->y)*($this->y-$point->y) );
    }

    public function changeX($x){
        return new self($x,$this->y);
    }

    public function changeY($y){
        return new self($this->x,$y);
    }
}