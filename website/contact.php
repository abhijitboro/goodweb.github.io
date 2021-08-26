<?php

// connection reqired here
require_once("connection.php")

?>

<!-- //////////////////////////////////////////////////////////////// -->
<?php

// queries select method
$sql = "SELECT * FROM webusr ORDER BY email DESC LIMIT 1";

// checks queries
$collect = mysqli_query($conn, $sql);

// fetching queries as array
while ($rows = mysqli_fetch_array($collect)) {
    // echo "<h3 style='margin-left: 30%;'>"."Registration Date Time: ".$rows[5]."</h3>"."</br>";
    // echo "<h3 style='margin-left: 30%;'>"."First Name: ".$rows[0]."</h3>"."</br>";
    // echo "<h3 style='margin-left: 30%;'>"."Last Name: ".$rows[1]."</h3>"."</br>";
    echo "<h3 style='margin-left: 30%;'>"."Email Address: ".$rows[2]."</h3>"."</br>";
    echo "<h3 style='margin-left: 30%;'>"."Phone Number: ".$rows[4]."</h3>"."<hr>";
  }
?>
<!-- /////////////////////////////////////////////////////////////////// -->
 