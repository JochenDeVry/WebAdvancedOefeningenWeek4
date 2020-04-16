<?php
namespace util;

class Color
{
    const BLACK = "0x000000";
    const WHITE = "0xFFFFFF";
    const RED = "0xFF0000";
    const GREEN = "0xFF00FF";
    const BLUE = "0x0000FF";
    const YELLOW = "0xFFFF00";

    private $rgb;
    private function __construct($rgb)
    {
        $this->rgb = $rgb;
    }
    public static function BLACK(){
        return new Color(BLACK);
    }
    public static function WHITE(){
        return new Color(WHITE);
    }
    public static function RED(){
        return new Color(RED);
    }
    public static function GREEN(){
        return new Color(GREEN);
    }
    public static function BLUE(){
        return new Color(BLUE);
    }
    public static function YELLOW(){
        return new Color(YELLOW);
    }
    public function getRgb(){
        return $this->rgb;
    }
    public function __toString()
    {
        return $this->rgb;
    }
}