<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan"; //sesuaikan dengan nama database

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("conn Error: " . $conn->connect_error);
}
?>