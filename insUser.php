<?php
session_start();

include("koneksi.php");

$kode=$_POST['kode_user'];
$nama=$_POST['nama_user'];
$email=$_POST['email_user'];
$telepon=$_POST['telepon_user'];
$password=$_POST['password_user'];
$peran=$_POST['peran_user'];

$sql = "insert into table user (kode_user, nama,email,telepon,password,peran) values ($kode,$nama,$email,$password,$telepon,$password,$peran)";
if ($conn->query($sql)) {
    $conn->close();
    header("location:manage_user.php");
}else{
    $conn->close();
    echo "New records failed";
}
?>