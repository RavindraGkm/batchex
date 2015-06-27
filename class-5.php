<?php
interface Shape {
     function cal_area();
     function cal_area2();
}

class Rectangle implements Shape {
    function cal_area() {
        $this->area = $this->w*$this->h;
    }
    function cal_area2() {

    }
}

$obj = new Rectangle(200,300);
$obj->cal_area();
$obj->print_area();
?>