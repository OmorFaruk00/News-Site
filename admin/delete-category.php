
<?php
if($_SESSION["user_role"] =='0'){
	header("Location:http://localhost/News-site/admin/post.php");
}

include "config.php";

$cat_id = $_GET['id'];

$sql = "DELETE FROM category  WHERE category_id ='$cat_id'";
if(mysqli_query($conn,$sql)){
	header("Location:http://localhost/News-site/admin/category.php");
}




?>