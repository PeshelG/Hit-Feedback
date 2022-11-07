<?php
session_start();
include_once "conn.php";

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$likes = mysqli_real_escape_string($conn, $_POST['likes']);
$knowledge = mysqli_real_escape_string($conn, $_POST['knowledge']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);

if(!empty($name) ||!empty($email) ||!empty($address) ||!empty($likes) ||!empty($knowledge) ||!empty($comment)  ){

  $sql = "INSERT INTO feedback(name,email,address,likes,knowledge,comment) VALUES ('$name','$email','$address','$likes','$knowledge','$comment')";

    if(mysqli_query($conn,$sql)){
        header("Location: /university/public_html/index.php");
    }else{
    echo "Failed to send!";
}
}else{
    $error = "Type message first!";
    header("Location: /university/public_html/index.php");
}