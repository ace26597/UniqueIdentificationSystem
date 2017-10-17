<?php


include("db_connection.php");
include("include.inc.php");

 $query = mysql_query("select user_id FROM log ORDER BY id DESC LIMIT 1");
      $row = mysql_fetch_assoc($query);
      $var = $row['user_id'];   

      echo "UID = $var ";
      
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      //$db_file_name = rand(100000000000,999999999999).".".$file_ext;
      $expensions= array("jpeg","jpg","png");
      //str_replace(['name'],$var,['name']);
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
          echo $file_name;
         $sql="update img set path=('$file_name') where UID=".$var;
         //$sql="update img set path='$file_name' where UID=".$var;
         if(mysqli_query($dbcon,$sql))  
            {  
             move_uploaded_file($file_tmp,"images/".$file_name);
  
            echo"<script>window.open('esuserview.php','_self')</script>";  
            }
      }else
          {
         print_r($errors);
          }
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>