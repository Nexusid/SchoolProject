<?php
$host = "localhost"; //localhost database
$username = "root"; //username database
$password = ""; //password database
$db = "rawatinap";
$con = mysqli_connect($host, $username, $password, $db); //membuat koneksi ke server mysqli

if ($con->connect_error){
    die("Connection To Database Failure");
}

?>