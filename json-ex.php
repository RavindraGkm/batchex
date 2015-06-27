<?php
$ar = array('Name'=>"Nattu","Age"=>20,'Address'=>array('Street'=>420,'H.No'=>421));
$students[]=$ar;
$ar = array('Name'=>"Vaibhav","Age"=>20);
$students[]=$ar;
echo json_encode($students);
?>