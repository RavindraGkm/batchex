<?php
abstract class Shape {
    protected $w;
    protected $h;
    protected $area;
    function __construct($w,$h) {
        $this->w=$w;
        $this->h=$h;
    }
    abstract function cal_area();
    function print_area() {
        echo $this->area;
    }
}

class Rectangle extends Shape {
    function cal_area() {
        $this->area = $this->w*$this->h;
    }
}



$obj = new Rectangle(200,300);
$obj->cal_area();
$obj->print_area();
?>