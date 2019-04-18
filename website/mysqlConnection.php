<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pokedb";

// connection to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully \n";

echo "<br/>";