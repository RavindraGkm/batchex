<?php
include_once('db/Database.php');
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet">
    <title></title>
</head>
<body>
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-md-5 col-md-offset-2">
            <?php
            $db = new Database();
            $ids = $db->get_all_student_ids();
            ?>
            <select class="form-control" id="student_id">
                <option>Select Id</option>
            <?php
            foreach($ids as $id) {
                echo "<option value='$id'>".$id."</option>";
            }
            ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top: 10px;">
            <button type="button" class="btn btn-primary" id="edit">Edit</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top: 10px;">
            <form class="form-horizontal" role="form">
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Student Name</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="student_name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Age</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="age" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Gender</label>
                        <div class="col-md-4">
                            <select class="form-control" id="gender">
                                <option>Select Gender</option>
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Address</label>
                        <div class="col-md-4">
                            <textarea id="address" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-3">
                            <button class="btn btn-primary">Save &amp; Continue</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<script src="assets/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#edit").click(function() {
            $.ajax({
                url: "student.php",
                type: "GET",
                dataType: "JSON",
                data: {
                    get_student_info:true,
                    student_id: $("#student_id").val()
                },
                success: function (data) {
                    if(data.count==1) {
                        $("#student_name").val(data.st_name);
                        $("#age").val(data.st_age);
                        $("#gender").val(data.st_gender);
                        $("#address").val(data.st_address);
                    }
                }
            });
        });
    });
</script>
