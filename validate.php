<?php

include('include.inc.php');
    
if(isset($_GET['user_login']))//this will tell us what to do if some data has been post through form with button.  
{  
    $user_id=$_GET['user_id']; 
    $user_pass=$_GET['access'];  
  
    $user_query=mysql_query("select * from login_info where UID='$user_id' ");  
    $row = mysql_fetch_assoc($user_query);
    
    if($row['password'] == $user_pass)  
    {  
        include('userdata.php');
       
    }  
    else {
        echo"<script>alert('User Details are incorrect..!')</script>";
        echo "<script>window.open('esuserlogin.php','_self')</script>";
    }  
  
}