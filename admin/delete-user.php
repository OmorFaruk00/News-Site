<?php 
if($_SESSION["user_role"] =='0'){
  header("Location:http://localhost/News-site/admin/post.php");
  }


       $user_id = $_GET['id'];
        include "config.php";
        $sql="DELETE FROM `user`  WHERE user_id = '$user_id'";
        $result = mysqli_query($conn,$sql) or die ('Query failed');

        if($result ){
        	header("Location:http://localhost/News-site/admin/users.php");
        }

        mysql_close($result);
 ?>