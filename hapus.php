<?php
include 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = mysqli_query($con, "DELETE FROM rawat WHERE id = '$id'") or die (mysqli_error($con));
    if($con-> query($sql) == TRUE){
        echo "Data berhasil diubah";
        header("Location: rawat.php");
    
    }
    else
    {
        echo"Data gagal diubah";
    }
?>