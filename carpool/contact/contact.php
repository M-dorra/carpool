<?php 
$m = mysqli_connect('localhost','root','','covoiturage');     

$name=$_GET["name"];
$email=$_GET["email"];
$message=$_GET["message"];

$insert_user="insert into contact (name,email,message)
values('".$name."','".$email."','".$message."')";
$res_user=mysqli_query($m,$insert_user);

mysqli_close($m); 
header("Location: thank_you.html"); 
exit;
?>
