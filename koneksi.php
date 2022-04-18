<?php
$servername = "127.0.0.1:8889";
$username = "root";
$password = "root";
$db = "toko_abc";

//create connection
$conn = new mysqli($servername,$username,$password,$db);

//check connection
if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
}

echo "Connected successfully<hr>";
?>