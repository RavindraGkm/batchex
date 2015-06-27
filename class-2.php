<?php
class A {
    private $i;
    function __construct($x) {
        $this->i=$x;
    }
    function get_i () {
        return $this->i;
    }
}
class B extends A {
    public $j;
    function __construct($x,$y) {
        parent::__construct($x);
        $this->j=$y;
    }
    function get_sum() {
        return $this->get_i()+$this->j;
    }
}

$obj = new B(400,600);
echo $obj->get_sum();
?>