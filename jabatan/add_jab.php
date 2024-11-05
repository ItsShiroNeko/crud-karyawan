<?php 
include '../conn.php';

$jabatan = $_POST['jabatan'];
$gaji = $_POST['gaji'];
$tunjangan = $_POST['tunjangan'];

$stmt = $conn->prepare("INSERT INTO jabatan (nama_jab, gaji_pokok, tunjangan) VALUES (?,?,?)");
$stmt->bind_param("ssi", $jabatan, $gaji, $tunjangan);

if ($stmt->execute()){
    echo "Data berhasil disimpan";
    header("Location: ../index.php");
    exit;

}else{
    echo "error";
}
$stmt->close();
$conn->close();
?>