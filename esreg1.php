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
                        <a href="essearch.php">Search</a>
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
  
  <h1>member Registration Form 2</h1>
  <fieldset>
  <form class="box login" role="form" method="post" action="esreg1.php">
  <div class="col-2">
    <label>
      Mother's name
      <input class="form-control" placeholder="Mother's name" id="mother" name="mother" tabindex="1">
    </label>
  </div>
  <div class="col-2">
    <label>
        Father's Name
      <input class="form-control" placeholder="Father's name" id="father" name="father" tabindex="2">
    </label>
  </div>
  
  <div class="col-3">
    <label>
      No of Siblings
      <input class="form-control" placeholder="Number of Siblings" id="siblings" name="siblings" tabindex="3">
    </label>
  </div>
  <div class="col-3">
    <label>
      Wife's Name
      <input class="form-control" placeholder="Wife's Name" id="wife" name="wife" tabindex="4">
    </label>
  </div>
  <div class="col-4">
    <label>
      children's name
      <input class="form-control" placeholder="children name-1" id="child1" name="child1" tabindex="5">
    </label>
  </div>
  <div class="col-4">
    <label>
      children's name
      <input class="form-control" placeholder="children name-2" id="child2" name="child2" tabindex="6">
    </label>
  </div>
  <div class="col-4">
    <label>
      children's name
      <input class="form-control" placeholder="children name-3" id="child3" name="child3" tabindex="7">
    </label>
  </div>
 
<div class="col-5">
    <label>
      Social Contribution:
      <input class="form-control" placeholder="Social Contribution" id="social1" name="social1" tabindex="8">
    </label>
  </div>

<div class="col-5">
<label>
      Social Contribution
      <input class="form-control" placeholder="Social Contribution" id="social2" name="social2" tabindex="9">
    </label>
  </div>

<div class="col-5">
<label>
      Social Contribution
      <input class="form-control" placeholder="Social Contribution" id="social3" name="social3" tabindex="10">
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
        $user_mother=$_POST['mother'];//here getting result from the post array after submitting the form.  
        $user_father=$_POST['father'];//same  
        $user_siblings=$_POST['siblings'];//same  
        $user_child1=$_POST['child1'];
	$user_child2=$_POST['child2'];
	$user_child3=$_POST['child3'];
	$user_wife=$_POST['wife'];
	$user_social1=$_POST['social1'];
        $user_social2=$_POST['social2'];
        $user_social3=$_POST['social3'];

    

    $insert_family="insert into family_info (mother,father,siblings,wife,child1,child2,child3) VALUES ('$user_mother','$user_father','$user_siblings','$user_wife','$user_child1','$user_child2','$user_child3')"; 
    $insert_social="insert into social_info (social1,social2,social3) VALUES ('$user_social1','$user_social2','$user_social3')";
    
if(mysqli_query($dbcon,$insert_family))  
    {  
        if(mysqli_query($dbcon, $insert_social))
        {
            
                        echo"<script>window.open('fileup.php','_self')</script>";  
                        
                    
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