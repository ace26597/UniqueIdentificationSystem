<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="eswelcome.php">
                    <img src="http://placehold.it/150x50&text=Logo" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="essearch.php">search</a>
                    </li>
                    <li>
                        <a href="esstat.php">Statistics</a>
                    </li>
                    <li>
                        <a href="eslogout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>



<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>User Registration Form -ESDL</title>
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
  <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
  <div id="wrapper">
  
  <h1>member Registration Form</h1>
  <fieldset>
  <form class="box login" role="form" method="post" action="esreg.php">
  <div class="col-2">
    <label>
      Name
      <input class="form-control" placeholder="What is your full name?" id="name" name="name" tabindex="1">
    </label>
  </div>
  <div class="col-2">
    <label>Password
      <input class="form-control" placeholder="Your Password" id="pass" name="pass" type="password"  tabindex="2">
    </label>
  </div>
  
  <div class="col-3">
    <label>
      Contact Number
      <input class="form-control" placeholder="What is the best # to reach you?" id="phone" name="phone" tabindex="3">
    </label>
  </div>
  <div class="col-3">
    <label>
      Email
      <input class="form-control" placeholder="What is your e-mail address?" id="email" name="email" type="email" tabindex="4">
    </label>
  </div>
  <div class="col-3">
    <label>
      Gender
      <input class="form-control" placeholder="What is your Gender M/F?" id="gender" name="gender" tabindex="5">
    </label>
  </div>
  <div class="col-4">
    <label>
      Maritual Status
      <input class="form-control" placeholder="What is your Maritual Status? M/U/W/D" id="maritstatus" name="maritstatus" tabindex="6">
    </label>
  </div>
  <div class="col-4">
    <label>
      Nationality
      <input class="form-control" placeholder="Eg. Indian/NRI" id="nationality" name="nationality" tabindex="7">
    </label>
  </div>
  <div class="col-4">
    <label>
      Age
      <input class="form-control" placeholder="Current Age" id="age" name="age" tabindex="8">
    </label>
  </div>
  <div class="col-4">
    <label>
      Driving Licence Number
      <input class="form-control" placeholder="Drivers Licence Number- XXXX" id="drivelic" name="drivelic" tabindex="9">
    </label>
  </div>


 <h3>Medical Info</h3>


<div class="col-5">
    <label>
      Blood Group
      <input class="form-control" placeholder="Your Blood Group" id="blood" name="blood" tabindex="10">
    </label>
  </div>

<div class="col-5">
<label>
      Diseases
      <input class="form-control" placeholder="List Diseases if You Have Any" id="disease" name="disease" tabindex="11">
    </label>
  </div>

<div class="col-5">
<label>
      Mediacal Insurance Number
      <input class="form-control" placeholder="Your Medical Insurance Number" id="medicins" name="medicins" tabindex="12">
    </label>
  </div>


<div class="col-6">
<label>
      Height
      <input class="form-control" placeholder="Approx Height in Feet" id="Height" name="height" tabindex="13">
    </label>
  </div>

<div class="col-6">
<label>
      Weight
      <input class="form-control" placeholder="Approx Wright in Kgs" id="weight" name="weight" tabindex="14">
    </label>
  </div>


<h3>Financial Info</h3>

<div class="col-7">
    <label>
      User'sProfession
      <input class="form-control" placeholder="Your Current Profession" id="profession" name="profession" tabindex="15">
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
      <input class="form-control" placeholder="Bank Name" id="bankname" name="bankname" tabindex="17">
    </label>
  </div>

<div class="col-8">
    <label>
      Bank Account Number
      <input class="form-control" placeholder="Bank Account Number" id="bankacc" name="bankacc" tabindex="18">
    </label>
  </div>

<div class="col-8">
    <label>
      Annual Income
      <input class="form-control"  placeholder="Bank Balance" id="bankbalance" name="bankbalance" tabindex="19">
    </label>
  </div>


<h3>Criminal Info</h3>


<div class="col-9">
    <label>
      Previously involved Crime
      <input class="form-control" placeholder="Previously involved Crime" id="crime" name="crime" tabindex="20">
    </label>
  </div>

<div class="col-9">
    <label>
      Date of Crime
      <input class="form-control" placeholder="MM/DD/YYYY" id="crimedate" name="crimedate" tabindex="21">
    </label>
  </div>

<div class="col-9">
    <label>
      Crime place
      <input class="form-control" placeholder="Crime place" id="crimeplace" name="crimeplace" tabindex="22">
    </label>
  </div>
</fieldset>

  

  <div class="col-submit">
    <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >
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
if(isset($_POST['register']))  
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


    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  

    $insert_log="insert into login_info (email_id,password) VALUES ('$user_email','$user_pass')"; 
    $insert_medic="insert into medical_info (Name,Blood_grp,Height,Weight,Diseases,Medical_insurance_no) VALUES ('$user_name','$user_bloodgrp','$user_height','$user_weight','$user_disease','$user_medicins')";
    $insert_personalinfo="insert into personal_info (name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('$user_name','$user_email','$user_age','$user_gender','$user_nationality','$user_maritual','$user_contact','$user_drivelic')";
    $insert_crime="insert into criminal_info (crime,date,place) VALUES ('$user_crime','$user_crimedate','$user_crimeplace')";
    $insert_financial="insert into financial_info (earning_method,bank_name,acc_no,bank_balance) VALUES ('$user_profession','$user_bankname','$user_accno','$user_bankbalance')";
    
   
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
                        echo"<script>window.open('esreg1.php','_self')</script>";  
                        
                    }
                }
            }
        }
        
    }  
    
}  
  
?>  

<!--Notice: Undefined index: age in C:\xamppp\htdocs\ESDL\esreg.php on line 209

Notice: Undefined index: bankbal in C:\xamppp\htdocs\ESDL\esreg.php on line 221

Warning: mysqli_query() expects at most 3 parameters, 6 given in C:\xamppp\htdocs\ESDL\esreg.php on line 253

//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)
    {  
	echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
	exit();  
    }  
//insert the user into the database.  

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
                        echo"<script>window.open('esuserlogin.php','_self')</script>";  
                        
                    }
                }
            }
        }
        
    }  


if (mysqli_query($dbcon, $insert_log)) {
    echo "New record created successfully for login";
} else {
    echo "Error: " . $insert_log . "<br>" . mysqli_error($dbcon);
}
if (mysqli_query($dbcon, $insert_medic)) {
    echo "New record created successfully for medic";
} else {
    echo "Error: " . $insert_medic . "<br>" . mysqli_error($dbcon);
}
if (mysqli_query($dbcon, $insert_personalinfo)) {
    echo "New record created successfully for personal";
} else {
    echo "Error: " . $insert_personalinfo . "<br>" . mysqli_error($dbcon);
}
if (mysqli_query($dbcon, $insert_crime)) {
    echo "New record created successfully for crime";
} else {
    echo "Error: " . $insert_crime . "<br>" . mysqli_error($dbcon);
}
if (mysqli_query($dbcon, $insert_financial)) {
    echo "New record created successfully for finance";
} else {
    echo "Error: " . $insert_financial . "<br>" . mysqli_error($dbcon);
}


mysqli_close($dbcon);
    -->