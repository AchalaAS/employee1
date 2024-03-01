<?php
include "db.php";
include "header.php";
$flag=0;
if(isset($_POST['submit']))
{
    foreach($_POST['attendance_status'] as $id=>$attendance_status)
    {
        $name = $_POST['name'][$id];
        $code = $_POST['code'][$id];
        $dob = $_POST['dob'][$id];
        $mobile = $_POST['mobile'][$id];
        $dest = $_POST['dest'][$id];
        $date = date("y-m-d h:i:s");

       $result= mysqli_query($conn,"insert into tbl_attendance_records(name,code,dob,mobile,dest,attendance_status,date) values ('$name','$code','$dob','$mobile','$dest','$attendance_status','$date')");
       if($result) {
            $flag = 1;
       }
    }
}
?>
<div class="panel panel-default">
    <div class="panel pannel-heading">
        <h2>
            <a href="add.php" class=" btn btn-success">Add Employee</a>
            <a href="view_records.php" class="btn btn-info pull-right">View All</a>
        </h2>
        <?php
        if ($flag) {
            ?>
        <div class="alert alert-success">
            Attendance Data Insert Successfully.
        </div>
        <?php
        }
        ?>
        <h3>
            <div class="well text-center">
                Date:<?php echo date("y-m-d"); ?>
            </div>
        </h3>


        <div class="panel panel-body">
            <form action="display-att.php" method="post">
                <table class="table table-striped">
                    <tr>
                        <th>S.No.</th>
                        <th>Employee Name</th>
                        <th>Employee Code</th>
                        <th>DOB</th>
                        <th>Mobile No.</th>
                        <th>Desinationt</th>
                        <th>Attendance Status</th>
                    </tr>

                    <?php
                    $result = mysqli_query($conn, "SELECT* FROM tbl_emp");
                    $serialnumber=0;
                    $counter = 0;
                    
                    while ($row = mysqli_fetch_array($result)) {
                        $serialnumber++;

                        ?>
                    <tr>
                        <td><?php echo $serialnumber; ?></td>

                        <td><?php echo $row['name']; ?></td>
                        <input type="hidden" value="<?php echo $row['name']; ?>" name="name[]">

                        <td><?php echo $row['code']; ?></td>
                        <input type="hidden" value="<?php echo $row['code']; ?>" name="code[]">

                        <td><?php echo $row['dob']; ?></td>
                        <input type="hidden" value="<?php echo $row['dob']; ?>" name="dob[]">

                        <td><?php echo $row['mobile']; ?></td>
                        <input type="hidden" value="<?php echo $row['mobile']; ?>" name="mobile[]">

                        <td><?php echo $row['dest']; ?></td>
                        <input type="hidden" value="<?php echo $row['dest']; ?>" name="dest[]">

                        <td><input type="radio" name="attendance_status[<?php echo $counter; ?>]"
                                value="Present">Present
                            <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Absent">Absent
                        </td>
                    </tr>

                    <?php
                    $counter++;
                    }
                    ?>
                </table>
                <input type="submit" name="submit" class="btn btn-info pull-leftt" value="Submit">

                <a href="index.html" class="btn btn-info pull-right">Back</a>
            </form>
        </div>

    </div>
</div>