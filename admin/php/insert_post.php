<?php
session_start();
if(!isset($_SESSION['author'])){
    header('location: http://localhost/themeshell_website_login_blog/login.php');
}
$author = $_POST['author'];
$title = $_POST['title'];
$seo = $_POST['Seo_title'];
$category = $_POST['category']; // for this just 1 2 4
$content = $_POST['content'];

$con = mysqli_connect('127.0.0.1:3307','root');

mysqli_select_db($con,'themeshell_website');

$query = " INSERT INTO post(title,seo_title,content,author) VALUES ('$title','$seo','$content',$author)"; //$author has no hyphen because value is int, if string then have hyphen

mysqli_query( $con, $query);

$query = " SELECT id from post where seo_title = '$seo'"; 
$result = mysqli_query($con, $query); //$result is a array of query value, here it has only one value that is id
$row = mysqli_fetch_array($result);
$post_id = $row[0];


$category_array = explode(" ",$category); //it divides the values of category having space between them as a new element in the $category_array
foreach($category_array as $el){
    $query= "INSERT INTO has_category(post,category) values ('$post_id','$el')";
    mysqli_query($con,$query);
}
    header('Location: http://localhost/themeshell_website_login_blog/admin/insert_post.html');
?>