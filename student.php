<?php
include_once('db/Database.php');

if(isset($_GET['get_student_info'])) {
    $db = new Database();
    $info = $db->get_student_info($_GET['student_id']);
    echo json_encode($info);
}
?>