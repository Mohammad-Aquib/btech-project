<?php

$con=mysqli_connect("localhost", "root","","holiday") or die(mysqli_error($con));
$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$user_registration_query="insert into user_registration (name, email, phone, address)
values ('$name', '$email', '$phone', '$address')";
$user_registration_submit=mysqli_query($con , $user_registration_query)
or die(mysqli_error($con));
echo "User successfully inserted";

?>
