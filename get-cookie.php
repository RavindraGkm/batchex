<?php
$cookie = "";
if(isset($_COOKIE['ram'])) {
    $cookie = $_COOKIE['ram'];
    echo $cookie;
    echo "<br/>Same User ";
}
else {
    echo "<br/>Different User ";
}
?>