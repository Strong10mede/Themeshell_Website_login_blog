<?php
session_start();
if(!isset($_SESSION['author'])){ //to check a author from database is adding another author
    header('location: http://localhost/themeshell_website_login_blog/login.php');
}

$con = mysqli_connect('127.0.0.1:3307','root');
mysqli_select_db($con,'themeshell_website');

$mail = mysqli_real_escape_string($con,$_POST['email']);
$name = mysqli_real_escape_string($con,$_POST['username']);
$pass = mysqli_real_escape_string($con,$_POST['password']);

$pass = hash('sha512',$pass);

$query = "INSERT INTO author (name,mail,password) values ('$name','$mail','$pass')";
$result = mysqli_query($con,$query);

header('location: http://localhost/themeshell_website_login_blog/login.php');

?>