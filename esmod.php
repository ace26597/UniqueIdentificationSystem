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
                        <a href="esstat.php">Statistics</a>
                    </li>
                    <li>
                        <a href="befreg.php">Register</a>
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
                <h1>Hello</h1>
                <p>Anything</p>
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
<!DOCTYPE HTML>
<html>
<head>
<title>User Modification</title>
<meta charset="UTF-8" />

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
</head>

<body>
<form class="box login" role="form" method="post" action="esmod.php">
	<fieldset class="boxBody">
            <div class="form-group"  >
                <label>UID</label>
	  <input type="text" tabindex="1" name="user_id" placeholder="UID" required>
          </div>
          <div class="form-group"  >
	  <label></a>Password</label>
	  <input type="password" name="password" tabindex="2" required>
          </div>
	</fieldset>
	<footer>
	  <label><input type="submit" class="btnLogin" value="searchmod" name="searchmod" tabindex="2"></label>
	</footer>
</form>
   
</body>
  </html>

<?php  

include("db_connection.php");  
  
if(isset($_POST['searchmod']))//this will tell us what to do if some data has been post through form with button.  
{  
     
    $user_id=$_POST['user_id'];
    $password= $_POST['password'];
    
    $user_query="select * from login_info where UID='$user_id' AND password='$password'";  
  
    $run_query=mysqli_query($dbcon,$user_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
        $insert_mod="insert into log (user_id,password) VALUES ('$user_id','$password')";
        if(mysqli_query($dbcon,$insert_mod))
        {
        echo "<script>window.open('esmodify.php','_self')</script>"; 
        }
        
    }  
    else {echo"<script>alert('User Details are incorrect..!')</script>";} 
}  
  
?>  
