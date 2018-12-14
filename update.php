<?php
//include('dbconnected.php');
include 'db.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_rekam_medis = $_POST['nomor_rekam_medis'];
$tgl_lahir = $_POST['tgl_lahir'];
$asuransi = $_POST['asuransi'];
$spesialis = $_POST['spesialis'];
$dokter = $_POST['dokter'];
$status = $_POST['status'];
//query update
mysql_query("UPDATE rawat SET nama='$nama' , jenis_kelamin='$jenis_kelamin', nomor_rekam_medis ='$nomor_rekam_medis', tgl_lahir='$tgl_lahir', asuransi='$asuransi',spesialis='$spesialis',dokter='$dokter', status='$status' WHERE id='$id'");

header("location:index.php?pesan=update");

?>