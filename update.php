<?php
include 'conn.php';
session_start();

$id = $_POST["id_kar"];
$nama = $_POST["nama"];
$noInduk = $_POST["no_induk"];
$id_jab = $_POST["id_jab"];

mysqli_query($conn, "UPDATE karyawan set nama='$nama', no_induk='$noInduk', id_jab='$id_jab' where id_kar='$id'");
header("location:index.php");

mysqli_close($conn);