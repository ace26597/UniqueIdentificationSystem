<?php  

$dbcon=mysqli_connect("localhost","root","");  
if($dbcon){
    mysqli_select_db($dbcon,"ace");
    //echo 'Connected database: Ace';
}
?>  
