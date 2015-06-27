<?php
class A {
    public $i;
}
class B extends A {
    public $j;
    function __construct($x,$y) {
        $this->i=$x;
        $this->j=$y;
    }
}

$obj = new B(100,200);
echo $obj->i;
echo "<br/>";
echo $obj->j;

?>