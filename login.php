<?php
include_once('db/Database.php');

$flag = false;
if(isset($_POST['login_button'])) {
    $db = new Database();
    if($db->check_login($_POST)) {
        session_start();
        $_SESSION['logged_in'] =true;
        header("location: home.php");
    }
    else {
        $flag=true;
    }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="login.php" method="post">
                <?php
                if($flag) {
                    echo "Either user name or password is wrong";
                }
                ?>
                <input class="form-control" name="u_name" />
                <input class="form-control" name="u_password" />
                <button name="login_button" type="submit" class="btn btn-info">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>