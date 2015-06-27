<?php
class A {
    function print_msg() {
        echo "In super Class";
    }
}
class B extends A {
    function print_msg() {
        parent::print_msg();
        echo "In sub Class";
    }
}

$obj = new B();
$obj->print_msg();
?>