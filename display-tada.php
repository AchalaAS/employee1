<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/display.css">
    <link rel="stylesheet" href="style/footer.css">
    <title>Table with data</title>
</head>

<body>
    <!-- menu bar-->
    <nav><a href="index.html" id="nav-left">Home</a>
        <a href="add-tada.php" id="nav-left"> Add Tada </a>
        <a href="display-tada.php" id="nav-left">TADA Table</a>
        <a href="" id="nav-right" onclick="window.print()">Print</a>
        <a href="delete.php" id="nav-right">Delete</a>
    </nav>

    <!-- form2 -->
    <div class=" form2">
        <header>
            <h1>TADA Payment Report Table</h1>
        </header>


        <form action="" method="post">
            <table>
                <tr>
                    <th><strong>S.No.</strong></th>
                    <th><strong>Employee Name</strong></th>
                    <th><strong>Post Name</strong></th>
                    <th><strong>Mobile No.</strong></th>
                    <th><strong>Submit Bill</strong></th>
                    <th><strong>Pad Bill</strong></th>
                    <th><strong>Pending Bill</strong></th>
                </tr>



                <?php $conn = mysqli_connect("localhost", "root", "", "db_payment");

                if ($conn->connect_error) {
                    die("connection failed:" . $conn->connect_error);
                }

                $sql = "SELECT id, empn, postn, mobile, submitb, pad, pending from tada";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table>";

                    while ($row = $result->fetch_assoc()) {

                        echo "<tr>
<td>" . $row["id"] . "</td><td>" . $row["empn"] . "</td><td>" . $row["postn"] . "</td><td>" . $row["mobile"] . "</td><td>" . $row["submitb"] . "</td><td>" . $row["pad"] . "</td><td>" . $row["pending"] . "</td></tr>";
                    }

                    echo "</table>";
                } else {
                    "0 result";
                }

                $conn->close();

                ?>
            </table>
        </form>

        <!-- footer  -->
        <footer>
            <p>Created by: <i>Achala Srivastava</i></p>
        </footer>


    </div>
</body>

</html>