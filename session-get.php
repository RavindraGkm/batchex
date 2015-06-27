<?php
session_start();
if(isset($_SESSION['fname'])) {
    echo "Same user";
}
else {
    echo "Diff user";
}
?>