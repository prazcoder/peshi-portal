<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peshidata";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
   //echo "Connection established";
}
else{
    echo "connection failed".mysqli_connect_error;
}
?>