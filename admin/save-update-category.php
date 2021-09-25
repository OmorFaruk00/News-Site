
<?php
if($_SESSION["user_role"] =='0'){
  header("Location:http://localhost/News-site/admin/post.php");
}

include "config.php";


$catid =mysqli_real_escape_string($conn,$_POST['cat_id']);
$catname =mysqli_real_escape_string($conn,$_POST['cat_name']);




$sql = "UPDATE `category` SET category_name='$catname' WHERE `category_id`='$catid'";
if(mysqli_query($conn,$sql)){
 header("Location:http://localhost/News-site/admin/category.php");
}




?>