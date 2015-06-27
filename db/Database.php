<?php

define("DB_USER", "root");
define("DB_PASSWORD", "root");
define("DB_HOST", "localhost");
define("DB_TYPE", "mysql");
define("DB_NAME", "batchex");


class Database {
    function register_student() {

        $dbobject = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
        $stmt = $dbobject->prepare("select `st_name` from `student` where `id`=:id ");
        $id = 1;
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo $row['st_name']."<br/>";
        }
        $dbobject=null;
    }

    function get_all_student_ids () {
        $dbobject = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
        $stmt = $dbobject->prepare("select `id` from `student`");
        $stmt->execute();
        $array_ids = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $array_ids[]= $row['id'];
        }
        $dbobject=null;
        return $array_ids;
    }

    function get_student_info($id) {
        $dbobject = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
        $stmt = $dbobject->prepare("select * from `student` where `id`=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        if($stmt->rowCount()>0) {
            $st_info = $stmt->fetch(PDO::FETCH_ASSOC);
            $st_info['count']=1;
        }
        else {
            $st_info['count'] = 0;
        }
        $dbobject=null;
        return $st_info;
    }

    function check_login($info) {
        $dbobject = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
        $stmt = $dbobject->prepare("select * from `student` where `username`=:username and `password`=:password");
        $stmt->bindParam(":username",$info['u_name']);
        $stmt->bindParam(":password",$info['u_password']);
        $stmt->execute();
        if($stmt->rowCount()>0) {
            $dbobject=null;
            return true;
        }
        else {
            $dbobject=null;
            return false;
        }
    }
}
?>