<?php
include("database.php");

$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$repass=$_POST["repass"];


$sql="INSERT INTO users(name,email,pass,repass) VALUES ('$name','$email','$pass','$repass')";

mysqli_query($conn,$sql);

?>
