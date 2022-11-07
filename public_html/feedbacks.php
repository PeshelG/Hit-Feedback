<?php
include "../includes/display.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
    <div class="headers">
        <img src="assets/images/logo.jpg" alt="" srcset="">
        <h2>HIT Campus Visit Feedback Table</h2>
        <a href="../includes/logout.php" style="background-color: orange;padding:5px;border-radius:5px; text-decoration:none;color:white; height: auto;width: auto;">Logout</a>
    </div>
    <table class="styled-table">
        <thead>
          <tr>
           <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Likes</th>
            <th>Knowledge</th>
            <th>Comments</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          echo $output;
          ?>
          <!-- and so on... -->
        </tbody>
      </table>
</body>
q!HX0Kkg~SV9flMx
</html>