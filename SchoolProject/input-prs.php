<?php 
include 'db.php';
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_rekam_medis = $_POST['nomor_rekam_medis'];
$tgl_lahir = $_POST['tgl_lahir'];
$asuransi = $_POST['asuransi'];
$spesialis = $_POST['spesialis'];
$dokter = $_POST['dokter'];
$status = $_POST['status'];
$sql= "INSERT INTO rawat VALUES
    ('',
    '$nama',
    '$jenis_kelamin',
    '$nomor_rekam_medis',
    '$tgl_lahir',
    '$asuransi',
    '$spesialis',
    '$dokter',
    '$status')";

if($con-> query($sql) == TRUE){
    echo "Data berhasil dimasukkan";
    header("Location: rawat.php");

}
else{
    echo"Data gagal dimasukkan";
}

?>