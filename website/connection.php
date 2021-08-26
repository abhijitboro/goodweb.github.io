<!-- //////// version 1.0 ////////////////////////////// -->

<?php

// connecting to server
$conn = mysqli_connect("localhost", "root", "");

// connection check
if (!$conn) {
    echo "server error!";
}

// database connection check
if (!mysqli_select_db($conn, 'test')) {
    echo "database not connected!";
}

?>

<!-- /////////////////////////////////////////////////// -->
