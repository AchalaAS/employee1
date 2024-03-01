<?php
$servernme = "localhost";
$username = "root";
$password = "";
$dbname = "db_payment";
$link = mysqli_connect($servernme, $username, $password, $dbname);
$con = mysqli_select_db($link, $dbname);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--  <link rel="stylesheet" href="style.css " /> -->
    <link rel="stylesheet" href="style/add-tada.css" />
    <link rel="stylesheet" href="style/footer.css">
    <title>Add Tada Report</title>
</head>

<body>

    <p><?php
        if ($con) {
            echo ("");
        } else {
            die("connection failed because" . mysqli_connect_error());
        } ?></p>


    <!-- menu bar -->
    <nav>
        <a href="index.html" id="nav-left">Home</a>
        <a href="add-tada.html" id="nav-left">Add Tada</a>
        <a href="display-tada.php" id="nav-left">TADA Table</a>
        <a href="" id="nav-right" onclick="window.print()">Print</a>
        <a href="delete.php" id="nav-right">Delete</a>
    </nav>

    <!-- header -->
    <header>
        <h1>Add TADA Payment Report</h1>
    </header>



    <!-- form  -->
    <form action="" method="post">
        <center>
            <h2>Add TADA</h2>
            <br />
            <table>
                <tr>
                    <td><strong>S.No.</strong></td>
                    <td><input type="text" name="id" placeholder="S.No." /></td>
                </tr>
                <tr>
                    <td><strong>Employee Name</strong></td>
                    <td>
                        <input type="text" name="empn" id="empn" placeholder="Employee Name" size=" 40" required />
                    </td>
                </tr>
                <tr>
                    <td><strong>Post Name</strong></td>
                    <td>
                        <input type="text" name="postn" id="postn" placeholder="Post Name" required />
                    </td>
                </tr>
                <tr>
                    <td><strong>Mobile No.</strong></td>
                    <td>
                        <input type="number" name="mobile" id="mobile" placeholder="Mobile No." required />
                    </td>
                </tr>
                <tr>
                    <td><strong>Submit Bill</strong></td>
                    <td>
                        <input type="text" name="submitb" id="submitb" placeholder="Submit Bill" required />
                    </td>
                </tr>
                <tr>
                    <td><strong>Pad Bill</strong></td>
                    <td>
                        <input type="text" name="pad" id="pad" placeholder="Pad Bill" required />
                    </td>
                </tr>
                <tr>
                    <td><strong>Pending Bill</strong></td>
                    <td>
                        <input type="text" name="pending" id="pending" placeholder="Padding Bill" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <button type="submit" name="submit">
                            Insert
                        </button>
                    </td>
                </tr>
                <?php
                    if (isset($_POST["submit"])) {
                        mysqli_query($link, "insert into tada
 values('$_POST[id]','$_POST[empn]','$_POST[postn]','$_POST[mobile]','$_POST[submitb]','$_POST[pad]','$_POST[pending]')");
                        echo "record inserted successfully !";
                    }
                    ?>
            </table>
        </center>
    </form>

    <!-- footer  -->
    <footer>
        <p>Created by: <i>Achala Srivastava</i></p>
    </footer>
</body>

</html>