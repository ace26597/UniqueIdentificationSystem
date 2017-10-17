
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
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
                        <a href="essearch.php">Search</a>
                    </li>
                    <li>
                        <a href="esmod.php">Modify</a>
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php
include("db_connection.php");
include("include.inc.php");

$query = mysql_query("select UID FROM login_info ORDER BY UID DESC LIMIT 1");
      $row = mysql_fetch_assoc($query);
      $var = $row['UID'];   
      //$query = mysql_query("select path FROM img WHERE UID=$var");
//$row = mysql_fetch_assoc($query);
//$img1 = $row['path'];
//$img="images/$var.jpg";

    $img="images/$var.jpg";

?>

<html>
<img src= " <?php echo $img ?> " align="centre" width="300" height="300" style="margin-left: 520px; margin-top: 80px;" alt="test"/>
</html>
<!doctype html>
<html lang="en-US">
<head>
    
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>User Information</title>
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
  <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>

  <div id="wrapper">
  
  <h1>User Details</h1>
  
  <form>
  <div class="col-2">
    <label>Name: 
      
      <?php 
      include("include.inc.php");
      
      $query = mysql_query("select name FROM personal_info WHERE UID=$var");
      //$query1 = mysql_query("select name FROM personal_info WHERE email=$email");
      //if($query || $query1)
      //{
      $row = mysql_fetch_assoc($query);
      echo $row['name'];
      //}
      ?>
    </label>
  </div>
  <div class="col-2">
    <label>Password: 
      <?php
      $query = mysql_query("select password FROM login_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['password'];
      ?>
    </label>
  </div>
  
  <div class="col-3">
    <label>
      Contact Number:
      <?php 
      $query = mysql_query("select phn_no FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['phn_no'];
      ?>
    </label>
  </div>
  <div class="col-3">
    <label>
      Email:
      <?php 
      $query = mysql_query("select email_id FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['email_id'];
      ?>
    </label>
  </div>
  <div class="col-3">
    <label>
      Gender:
      <?php 
      $query = mysql_query("select gender FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['gender'];
      ?>
    </label>
  </div>
  <div class="col-4">
    <label>
      Maritual Status:
      <?php 
      $query = mysql_query("select marital_status FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['marital_status'];
      ?>
  
    </label>
  </div>
  <div class="col-4">
    <label>
      Nationality:
      <?php
      $query = mysql_query("select nationality FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['nationality'];
      ?>
    </label>
  </div>
  <div class="col-4">
    <label>
      Age:
      <?php 
      $query = mysql_query("select age FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['age'];
      ?>
    </label>
  </div>
  <div class="col-4">
    <label>
      Driving Licence Number:
      <?php  
      $query = mysql_query("select lic_no FROM personal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['lic_no'];
      ?>
    </label>
  </div>
</form>
</div>


<div id="wrapper">
 
<h3>Medical Info</h3>

<form>

<div class="col-5">
    <label>
      Blood Group:
      <?php 
      $query = mysql_query("select Blood_grp FROM medical_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['Blood_grp'];
      ?>
    </label>
  </div>

<div class="col-5">
<label>
      Diseases:
      <?php  
      $query = mysql_query("select Diseases FROM medical_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['Diseases'];
      ?>
    </label>
  </div>

<div class="col-5">
<label>
      Mediacal Insurance Number:
      <?php  
      $query = mysql_query("select Medical_insurance_no FROM medical_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['Medical_insurance_no'];
      ?>
    </label>
  </div>


<div class="col-6">
<label>
      Height:
      <?php  
      $query = mysql_query("select Height FROM medical_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['Height'];
      ?>
    </label>
  </div>

<div class="col-6">
<label>
      Weight:
      <?php 
      $query = mysql_query("select Weight FROM medical_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['Weight'];
      ?>
    </label>
  </div>
</form>
</div>
<div id="wrapper">

<h3>Financial Info</h3>

<form>
<div class="col-7">
    <label>
      User's Profession:
      <?php 
      $query = mysql_query("select earning_method FROM financial_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['earning_method'];
      ?>
    </label>
  </div>

<div class="col-7">
    <label>
      parent's Profession:
      <?php ?>
    </label>
  </div>

<div class="col-8">
    <label>
      Bank Name
      <?php 
      $query = mysql_query("select bank_name FROM financial_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['bank_name'];
      ?>
    </label>
  </div>

<div class="col-8">
    <label>
      Bank Account Number:
      <?php 
      $query = mysql_query("select acc_no FROM financial_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['acc_no'];
      ?>
    </label>
  </div>

<div class="col-8">
    <label>
      Annual Income:
      <?php 
      $query = mysql_query("select bank_balance FROM financial_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['bank_balance'];
      ?>
    </label>
  </div>
</form>
</div>
<div id="wrapper">

<h3>Criminal Info</h3>

<form>
<div class="col-9">
    <label>
      Previously involved Crime:
      <?php 
      $query = mysql_query("select crime FROM criminal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['crime'];
      ?>
    </label>
  </div>

<div class="col-9">
    <label>
      Date of Crime:
      <?php 
      $query = mysql_query("select date FROM criminal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['date'];
      ?>
    </label>
  </div>

<div class="col-9">
    <label>
      Crime place:
      <?php 
      $query = mysql_query("select place FROM criminal_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['place'];
      ?>
    </label>
  </div>
</form>
<div id="wrapper">
    <h3>Family Info</h3>

<form>
<div class="col-10">
    <label>
      Mother's name: 
      <?php 
      $query = mysql_query("select mother FROM family_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['mother'];
      ?>
    </label>
  </div>

<div class="col-10">
    <label>
      Father's name: 
      <?php 
      $query = mysql_query("select father FROM family_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['father'];
      ?>
    </label>
  </div>

<div class="col-10">
    <label>
      Siblings: 
      <?php 
      $query = mysql_query("select siblings FROM family_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['siblings'];
      ?>
    </label>
  </div>

    <div class="col-11">
    <label>
      Wife/Husband: 
      <?php 
      $query = mysql_query("select wife FROM family_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['wife'];
      ?>
    </label>
  </div>
    <div class="col-11">
    <label>
      Children
      <?php 
      $query = mysql_query("select child1 FROM family_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['child1'];
      ?>
    </label>
  </div>
    <div class="col-11">
    <label>
      Children: 
      <?php 
      $query = mysql_query("select child2 FROM family_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['child2'];
      ?>
    </label>
  </div>
    <div class="col-11">
    <label>
      Children: 
      <?php 
      $query = mysql_query("select child3 FROM family_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['child3'];
      ?>
    </label>
        </form>
  </div>
    
    <div id="wrapper">
 
    <h3>Social Contribution</h3>

<form>
<div class="col-12">
    <label>
      Social Contribution: 
      <?php 
      $query = mysql_query("select social1 FROM social_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['social1'];
      ?>
    </label>
  </div>

<div class="col-12">
    <label>
      Social Contribution: 
      <?php 
      $query = mysql_query("select social2 FROM social_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['social2'];
      ?>
    </label>
  </div>

<div class="col-12">
    <label>
      Social Contribution: 
      <?php 
      $query = mysql_query("select social3 FROM social_info WHERE UID=$var");
      $row = mysql_fetch_assoc($query);
      echo $row['social3'];
      ?>
    </label>
    </form> 
  </div>
 
  </div>
<script type="text/javascript">
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
</script>
</body>
</html>


