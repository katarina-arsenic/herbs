<?php
$servername = "sql200.epizy.com";
$username = "epiz_31121671";
$password = "7XhEahxb5zgcPgN";
$dbname = "epiz_31121671_db1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
