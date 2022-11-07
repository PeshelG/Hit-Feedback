<?php
$conn = mysqli_connect("localhost","root","","feedback");

$error="";
if(!$conn){
    $error = "Connection error: " . mysqli_connect_error();
}else{
    echo "Secure Connection established...";
};

?>