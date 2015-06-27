<?php
$user_name = $_POST['user_name'];
echo $user_name."<br/>";
$user_pass = $_POST['user_pass'];
echo $user_pass."<br/>";
if(isset($_POST['user_check'])) {
    $user_check = $_POST['user_check'];
    echo $user_check."<br/>";
}
else {
    echo "Languages not selected"."<br/>";
}
$day = $_POST['day'];
echo $day."<br/>";
$languages = $_POST['languages'];
foreach($languages as $language) {
    echo $language."<br/>";
}
?>