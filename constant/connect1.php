<?php
/* Local Database*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gasmark";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
echo "Connection established";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?> 
