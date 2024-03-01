<?php
include "db.php";
include "header.php";

?>
<div class="panel panel-default">
    <div class="panel pannel-heading">
        <h2>
            <a href="add.php" class=" btn btn-success">Add Employee</a>
            <a href="view_records.php" class="btn btn-info pull-right">Back</a>
        </h2>

        <div class="panel panel-body">

            <form action="show_att.php" method="post">
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
                    $result = mysqli_query($conn, "SELECT * FROM tbl_attendance_records  ");
                    $serialnumber = 0;
                    $counter = 0;
                    while ($row = mysqli_fetch_array($result)) 
                    {
                        $serialnumber++;
                        $counter++; 
                        ?>
                    <tr>
                        <td><?php echo $serialnumber; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['dest']; ?></td>
                        <td><?php echo $row['attendance_status']?></td>

                        <td><input type="radio" name="attendance_status[<?php echo $counter; ?>]" <?php 
                        if ($row['attendance_status'] == "Present")
                               echo "checked=checked";
                            ?> value=" Present">Present
                            <input type="radio" name="attendance_status[<?php echo $counter; ?>]" <?php 
                        if ($row['attendance_status'] == "Absent")
                               echo "checked=checked";
                            ?> value="Absent">Absent
                        </td>
                    </tr>

                    <?php
                    $counter++;
                    }
                    ?>
                </table>
            </form>
        </div>

    </div>
</div>