<?php
include 'conn.php';

$id = $_GET['id'];
echo $id;

mysqli_query($conn, "DELETE from karyawan where id_kar='$id'");

header("location:index.php");