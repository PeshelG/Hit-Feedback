<?php
include_once "conn.php";

$output = "";

$sql = "SELECT * FROM feedback";
$query = mysqli_query($conn,$sql);
if($query){
    if(mysqli_num_rows($query)>0){
        while($row = mysqli_fetch_assoc($query)){
            $output .= '<tr><td>' .$row['id'] . '</td>
                <td>'.$row['name'] .'</td>
                <td>'.$row['email'] . '</td>
                <td>'.$row['address'].'</td>
                <td>'.$row['likes'].'</td>
                <td>'.$row['knowledge'].'</td>
                <td>'.$row['comment'].'</td>
                <td><a href="#">Delete</a><a href="#">Edit</a></td>
              </tr>';
        }
        }else{
            $output = "No feedback yet";
       }
    }else{
        $output = "Error: No data found!";
}