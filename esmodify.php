<?php
include("db_connection.php");
include("include.inc.php");

 $query = mysql_query("select user_id FROM log ORDER BY id DESC LIMIT 1");
      $row = mysql_fetch_assoc($query);
      $var = $row['user_id'];
      $query = mysql_query("select path FROM img WHERE UID=$var");
$row = mysql_fetch_assoc($query);
$img1 = $row['path'];
$img="images/$img1.jpg";

?>

<html>
<img src= " <?php echo $img ?> " align="centre" width="300" height="300" style="margin-left: 520px;" alt="test"/>
</html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>User Modification Form -ESDL</title>
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
  <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
  <div id="wrapper">
  
  <h1>member Modification Form</h1>
  <fieldset>
  <form class="box login" role="form" method="post" action="esmodify.php">
  <div class="col-2">
    <label>
      Name
      <?php 
      include("include.inc.php");
       $query = mysql_query("select user_id FROM log  ORDER BY id DESC LIMIT 1");
      $row = mysql_fetch_assoc($query);
      $var = $row['user_id'];
      $query = mysql_query("select name FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      
      ?>
      <input class="form-control" value= "<?php echo $row['name']?>" id="name" name="name" tabindex="1">
    </label>
  </div>
  <div class="col-2">
    <label>Password
        <?php
      $query = mysql_query("select password FROM login_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      ?>
      <input class="form-control" value= "<?php echo $row['password']?>" id="pass" name="pass" type="password"  tabindex="2">
    </label>
  </div>
  
  <div class="col-3">
    <label>
      Contact Number
      <?php 
      $query = mysql_query("select phn_no FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['phn_no'];
      ?>
      <input class="form-control" value= "<?php echo $row['phn_no']?>" id="phone" name="phone" tabindex="3">
    </label>
  </div>
  <div class="col-3">
    <label>
      Email
      <?php 
      $query = mysql_query("select email_id FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['email_id'];
      ?>
      <input class="form-control" value= "<?php echo $row['email_id']?>" id="email" name="email" type="email" tabindex="4">
    </label>
  </div>
  <div class="col-3">
    <label>
      Gender
      <?php 
      $query = mysql_query("select gender FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['gender'];
      ?>
      <input class="form-control" value= "<?php echo $row['gender']?>" id="gender" name="gender" tabindex="5">
    </label>
  </div>
  <div class="col-4">
    <label>
      Marital Status
      <?php 
      $query = mysql_query("select marital_status FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['marital_status'];
      ?>
      <input class="form-control" value= "<?php echo $row['marital_status']?>" id="maritstatus" name="maritstatus" tabindex="6">
    </label>
  </div>
  <div class="col-4">
    <label>
      Nationality
       <?php
      $query = mysql_query("select nationality FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['nationality'];
      ?>
      <input class="form-control" value= "<?php echo $row['nationality']?>" id="nationality" name="nationality" tabindex="7">
    </label>
  </div>
  <div class="col-4">
    <label>
      Age
      <?php 
      $query = mysql_query("select age FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['age'];
      ?>
      <input class="form-control" value= "<?php echo $row['age']?>" id="age" name="age" tabindex="8">
    </label>
  </div>
  <div class="col-4">
    <label>
      Driving Licence Number
      <?php  
      $query = mysql_query("select lic_no FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['lic_no'];
      ?>
      <input class="form-control" value= "<?php echo $row['lic_no']?>" id="drivelic" name="drivelic" tabindex="9">
    </label>
  </div>


 <h3>Medical Info</h3>


<div class="col-5">
    <label>
      Blood Group
      <?php 
      $query = mysql_query("select Blood_grp FROM medical_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['Blood_grp'];
      ?>
      <input class="form-control" value= "<?php echo $row['Blood_grp']?>" id="blood" name="blood" tabindex="10">
    </label>
  </div>

<div class="col-5">
<label>
      Diseases
      <?php  
      $query = mysql_query("select Diseases FROM medical_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['Diseases'];
      ?>
      <input class="form-control" value= "<?php echo $row['Diseases']?>" id="disease" name="disease" tabindex="11">
    </label>
  </div>

<div class="col-5">
<label>
      Mediacal Insurance Number
      <?php  
      $query = mysql_query("select Medical_insurance_no FROM medical_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['Medical_insurance_no'];
      ?>
      <input class="form-control" value= "<?php echo $row['Medical_insurance_no']?>" id="medicins" name="medicins" tabindex="12">
    </label>
  </div>


<div class="col-6">
<label>
      Height
      <?php  
      $query = mysql_query("select Height FROM medical_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['Height'];
      ?>
      <input class="form-control" value= "<?php echo $row['Height']?>" id="Height" name="height" tabindex="13">
    </label>
  </div>

<div class="col-6">
<label>
      Weight
      <?php  
      $query = mysql_query("select Weight FROM medical_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['Weight'];
      ?>
      <input class="form-control" value= "<?php echo $row['Weight']?>" id="weight" name="weight" tabindex="14">
    </label>
  </div>


<h3>Financial Info</h3>

<div class="col-7">
    <label>
      User'sProfession
      <?php 
      $query = mysql_query("select earning_method FROM financial_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['earning_method'];
      ?>
      <input class="form-control"value= "<?php echo $row['earning_method']?>" id="profession" name="profession" tabindex="15">
    </label>
  </div>

<div class="col-7">
    <label>
      parent's Profession
      
      <input class="form-control" placeholder="Your parents' Profession" id="parprofession" name="parprofession" tabindex="16">
    </label>
  </div>

<div class="col-8">
    <label>
      Bank Name
       <?php 
      $query = mysql_query("select bank_name FROM financial_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['bank_name'];
      ?>
      <input class="form-control" value= "<?php echo $row['bank_name']?>" id="bankname" name="bankname" tabindex="17">
    </label>
  </div>

<div class="col-8">
    <label>
      Bank Account Number
      <?php 
      $query = mysql_query("select acc_no FROM financial_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['acc_no'];
      ?>
      <input class="form-control" value= "<?php echo $row['acc_no']?>" id="bankacc" name="bankacc" tabindex="18">
    </label>
  </div>

<div class="col-8">
    <label>
      Bank Balance
      <?php 
      $query = mysql_query("select bank_balance FROM financial_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['bank_balance'];
      ?>
      <input class="form-control"  value= "<?php echo $row['bank_balance']?>" id="bankbalance" name="bankbalance" tabindex="19">
    </label>
  </div>


<h3>Criminal Info</h3>


<div class="col-9">
    <label>
      Previously involved Crime
      <?php 
      $query = mysql_query("select crime FROM criminal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['crime'];
      ?>
      <input class="form-control" value= "<?php echo $row['crime']?>" id="crime" name="crime" tabindex="20">
    </label>
  </div>

<div class="col-9">
    <label>
      Date of Crime
      <?php 
      $query = mysql_query("select date FROM criminal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['date'];
      ?>
      <input class="form-control" value= "<?php echo $row['date']?>" id="crimedate" name="crimedate" tabindex="21">
    </label>
  </div>

<div class="col-9">
    <label>
      Crime place
      <?php 
      $query = mysql_query("select place FROM criminal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      //echo $row['place'];
      ?>
      <input class="form-control" value= "<?php echo $row['place']?>" id="crimeplace" name="crimeplace" tabindex="22">
    </label>
    
    
  </div>
</fieldset>
  
  

  <div class="col-submit">
    <input class="btn btn-lg btn-success btn-block" type="submit" value="Modify" name="modify" >
  </div>
  
  
  </div>
<script type="text/javascript">
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
</script>
</form>
</body>
</html>



<?php  
 include("db_connection.php");//make connection here  

       $query = mysql_query("select user_id FROM log  ORDER BY id DESC LIMIT 1");
       //$query = mysql_query("SELECT user_id FROM log WHERE id = LAST_INSERT_ID()");
      $row = mysql_fetch_assoc($query);
      $var = $row['user_id'];

echo $var;
if(isset($_POST['modify']))  
{  
        $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
        $user_pass=$_POST['pass'];//same  
        $user_email=$_POST['email'];//same  
        $user_contact=$_POST['phone'];
	$user_gender=$_POST['gender'];
	$user_nationality=$_POST['nationality'];
	$user_age=$_POST['age'];
	$user_maritual=$_POST['maritstatus'];
	$user_drivelic=$_POST['drivelic'];
	$user_bloodgrp=$_POST['blood'];
	$user_height=$_POST['height'];
	$user_weight=$_POST['weight'];
	$user_disease=$_POST['disease'];
	$user_medicins=$_POST['medicins'];
	$user_profession=$_POST['profession'];
	$user_parentproff=$_POST['parprofession'];
	$user_bankname=$_POST['bankname'];
	$user_accno=$_POST['bankacc'];
	$user_bankbalance=$_POST['bankbalance'];
	$user_crime=$_POST['crime'];
	$user_crimedate=$_POST['crimedate'];
	$user_crimeplace=$_POST['crimeplace'];

    
    $insert_log="UPDATE login_info set email_id = '$user_email', password = '$user_pass' where UID =".$var; 
    $insert_medic="update medical_info set name = '$user_name',Blood_grp = '$user_bloodgrp',Height = '$user_height',Weight = '$user_weight',Diseases = '$user_disease',Medical_insurance_no = '$user_medicins' where UID =".$var;
    $insert_personalinfo="update personal_info set name ='$user_name' ,email_id ='$user_email' ,age ='$user_age' ,gender ='$user_gender' ,nationality ='$user_nationality' ,marital_status = '$user_maritual',phn_no ='$user_contact' ,lic_no = '$user_drivelic' where UID =".$var;
    $insert_crime="UPDATE criminal_info set crime = '$user_crime',date = '$user_crimedate',place = '$user_crimeplace' where UID =".$var;
    $insert_financial="UPDATE financial_info set earning_method ='$user_profession' ,bank_name = '$user_bankname',acc_no = '$user_accno',bank_balance = '$user_bankbalance' where UID =".$var;
   
            
            
if(mysqli_query($dbcon,$insert_log))  
    {  
        if(mysqli_query($dbcon, $insert_medic))
        {
            if(mysqli_query($dbcon, $insert_crime))
            {
                if(mysqli_query($dbcon,$insert_personalinfo))
                {
                    if(mysqli_query($dbcon,$insert_financial))
                    {
                        echo"<script>window.open('esmodify1.php','_self')</script>";  
                        
                    }
                }
            }
        }
        
    }  

}
  
?>  

