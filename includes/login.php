<?php
session_start();
include_once "conn.php";

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

if(!empty($message) || !empty($password) ){
    
    $sql = "SELECT * FROM logintb WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);

      if(mysqli_num_rows($query)){
          $_SESSION["name"] = $username;
          header("Location: /university/public_html/feedbacks.php");
      }else{
      echo "Failed to send!";
      header("Location: /university/public_html/admin.php");
  }
  }else{
      $error = "Type message first!";
      header("Location: /university/public_html/admin.php");
  }

?>