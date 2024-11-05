<?php
include '../conn.php';

$id = $_GET['id'];
echo $id;

mysqli_query($conn, "DELETE from jabatan where id_jab='$id'");

header("location:input_jab.php");