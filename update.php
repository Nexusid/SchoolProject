<?php 

include 'db.php';
$nomor_pasien = $_POST['nomor_pasien'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_rekam_medis = $_POST['nomor_rekam_medis'];
$tgl_lahir = $_POST['tgl_lahir'];
$asuransi = $_POST['asuransi'];
$spesialis = $_POST['spesialis'];
$dokter = $_POST['dokter'];
$status = $_POST['status'];
$sql="UPDATE rawat SET nama='$nama', jenis_kelamin='$jenis_kelamin', nomor_rekam_medis='$nomor_rekam_medis', tgl_lahir='$tgl_lahir', asuransi='$asuransi', spesialis='$spesialis', dokter='$dokter', status='$status', WHERE 1='$nomor_pasien'";


if($con-> query($sql) == TRUE){
    echo "Data berhasil diubah";
    header("Location: rawat.php");

}
else{
    echo"Data gagal diubah";
}
?>