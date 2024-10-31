<?php 
include 'conn.php';

$no_induk = $_POST['no_induk'];
$nama = $_POST['nama'];


$id_jab = $_POST['id_jab'];

$stmt = $conn->prepare("INSERT INTO karyawan (no_induk, nama, id_jab) VALUES (?,?,?)");
$stmt->bind_param("ssi", $no_induk, $nama, $id_jab);

if ($stmt->execute()){
    echo "Data berhasil disimpan";
    header("Location: index.php");
    exit;

}else{
    echo "error";
}
$stmt->close();
$conn->close();
?>