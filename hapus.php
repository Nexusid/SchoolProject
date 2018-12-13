<?php
include 'db.php';
$nomor_pasien =$_GET['nomor_pasien'];
// sending query
$sql="DELETE FROM rawat WHERE nomor_pasien = '$nomor_pasien'";
     
if($con-> query($sql) == TRUE){
    echo "Data berhasil dihapus";
    header("Location: rawat.php");

}
else{
    echo"Data gagal dihapus";
}
?>