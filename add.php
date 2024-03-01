<?php
include "header.php";
include "db.php";
$flag = 0;

if(isset($_POST['submit']))
{
    $result=mysqli_query($conn, "insert into tbl_emp(name,code,dob,mobile,dest) values('$_POST[name]','$_POST[code]','$_POST[dob]','$_POST[mobile]','$_POST[dest]')");

    if($result){
        $flag = 1;
    }
}
?>

<div class="panel panel-default">

    <?php if($flag) { ?>
    <div class="alert alert-success"><strong>!success</strong>attendance data successfully inserted.</div>
    <?php } ?>

    <div class="pannel-heading">
        <h2>
            <a href="add.php" class="btn btn-success">Add Employee</a>
            <a href="" class="btn btn-info pull-right">Back</a>
        </h2>
    </div>
    <div class="panel-body">

        <form action="add.php" method="post">
            <div class="form-group">
                <label for="name">Employee Name</label>
                <input type="text" class="form-control" name="name" id="name" required="">
            </div>

            <div class="form-group">
                <label for="code">Employee Code</label>
                <input type="varchar" class="form-control" name="code" id="code" required="">
            </div>

            <div class="form-group">
                <label for="dob">DOB</label>
                <input type="date" class="form-control" name="dob" id="dob" required="">
            </div>

            <div class="form-group">
                <label for="mobile">Mobile No.</label>
                <input type="number" class="form-control" name="mobile" id="mobile" required="">
            </div>

            <div class="form-group">
                <label for="dest">Destination</label>
                <input type="text" class="form-control" name="dest" id="dest" required="">
            </div>

            <div class="form-group text-center">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
</div>