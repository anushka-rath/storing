<?php

if(isset($_POST["submit"])){
$conn= mysqli_connect("localhost","root","","deploy1");

if(!$conn) die("Couldn't Connect"). mysqli_connect_error();

    $first_name=$_REQUEST["first_name"];
    $last_name=$_REQUEST["last_name"];
    $email=$_REQUEST["email"];
    
    
    
    $sql= "INSERT INTO storage(first_name, last_name, email) VALUES
  ('$first_name', '$last_name', '$email')";

    $query = mysqli_query($conn,$sql);
    if(!$query) echo "Error. ". mysqli_error($conn);
   
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="theme-color" content="#6C0BA9">
		<title>Details</title>
		<link rel="stylesheet" href="css2.css">
		<script src="https://kit.fontawesome.com/4cd85a3cfa.js" crossorigin="anonymous"></script>
		<link rel="icon" type="image/x-icon" href="icons8-ubisoft-120.png">
	</head>

	<body>

<div id="message"><img src="successfully-done.gif" alt="checkmark">
<span>Thank You For Submitting Your Response</span>
</div>
