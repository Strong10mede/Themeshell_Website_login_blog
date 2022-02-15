<?php 
session_start();
$con = mysqli_connect('127.0.0.1:3307','root');
mysqli_select_db($con,'themeshell_website');

$mail = mysqli_real_escape_string($con,$_POST['email']);
$pass = mysqli_real_escape_string($con,$_POST['password']);

$pass = hash('sha512',$pass);

$query = "SELECT id from author where mail = '$mail' AND  password =  '$pass'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) == 1){
    $_SESSION['author']= mysqli_fetch_array($result)[0];
    header('location: http://localhost/themeshell_website_login_blog/admin/insert_post.php');
}
else {
header('location: http://localhost/themeshell_website_login_blog/login.php?error=1');
}


?>