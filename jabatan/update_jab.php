<?php
include '../conn.php';
session_start();

$id = $_POST["id_jab"];
$jabatan = $_POST["nama_jab"];
$gaji = $_POST["gaji_pokok"];
$tunjangan = $_POST["tunjangan"];

mysqli_query($conn, "UPDATE jabatan set nama_jab='$jabatan', gaji_pokok='$gaji', tunjangan='$tunjangan' where id_jab='$id'");
header("location:list_jab.php");

mysqli_close($conn);