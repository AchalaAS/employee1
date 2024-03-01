<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="display.css">
    <title>Delete Tada Report</title>
</head>

<body>
    <li>
        <a href="display-tada.php">Back</a>
    </li>
    <div class="form1">
        <header>
            <h1>TADA Delete </h1>
        </header>
        <form action="" method="post">
            <table>
                <tr>
                    <td><strong>S.No.</strong></td>
                    <td><input type="text" name="id" placeholder="S.No."></td>
                </tr>
                <br>
                <tr>
                    <td>
                        <button type="submit" name="submit2" value="delete">Delete</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

<!--  -->
<?php
$servernme = "localhost";
$username = "root";
$password = "";
$dbname = "db_payment";
$link = mysqli_connect($servernme, $username, $password, $dbname);
$con = mysqli_select_db($link, $dbname);
if ($con) {
    echo ("");
} else {
    die("connection failed because" . mysqli_connect_error());
}

// delete
if (isset($_POST["submit2"])) {
    mysqli_query($link, "delete form tada where id='$_POST[id]'");
    echo "record delete successfully";
}
?>