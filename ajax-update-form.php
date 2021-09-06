<?php
    $id = $_POST["id"];
    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    
    $conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

$sql = "UPDATE students set first_name='{$fname}',last_name='{$lname}' where id={$id} ";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}
?>