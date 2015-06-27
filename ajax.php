<?php
$user_id = $_GET['user_id'];
$st_array = array();
switch($user_id) {
    case 1:
        $st_array['name'] = 'Sakshi';
        $st_array['address']=array('street'=>10,'house_no'=>50);
        break;
    case 2:
        $st_array['name'] = 'Anubhav';
        $st_array['address']=array('street'=>20,'house_no'=>90);
        break;
    case 3:
        $st_array['name'] = 'Dilip';
        $st_array['address']=array('street'=>40,'house_no'=>400);
        break;
    default:
        $st_array['name'] = 'Shubham';
        $st_array['address']=array('street'=>100,'house_no'=>500);
        break;
}
echo json_encode($st_array);
?>