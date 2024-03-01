<?php
include "db.php";
include "header.php";
?>

<div class="panel panel-default">
    <div class="panel pannel-heading">
        <h2>
            <a href="add.php" class=" btn btn-success">Add Employee</a>
            <a href="display-att.php" class="btn btn-info pull-right">Back</a>
        </h2>


        <div class="panel panel-body">
            <table class="table table-striped">
                <tr>
                    <th>S.No.</th>
                    <th>Dates</th>
                    <th>Show Attendance</th>
                </tr>

                <?php
                    $result = mysqli_query($conn, "SELECT DISTINCT date FROM tbl_attendance_records");
                    $serialnumber=0;
                    while ($row = mysqli_fetch_array($result)) {
                        $serialnumber++;

                        ?>
                <tr>
                    <td><?php echo $serialnumber; ?></td>
                    <td><?php echo $row['date']; ?></td>

                    <td>
                        <form action="show_att.php" method="post">
                            <input type="hidden" value="<?php $row['date'] ?>" name="date">
                            <input type="submit" value="Show Attendance" class="btn btn-primary">
                        </form>
                    </td>
                </tr>

                <?php
                    }
                    ?>
            </table>
        </div>

    </div>
</div>