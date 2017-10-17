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
                <a class="navbar-brand" href="esuserlogin.php">
                    <img src="http://placehold.it/150x50&text=Logo" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="esreg.php">Register</a>
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
                <h3>Enter UID for deletion</h3>
                
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


<!DOCTYPE html>
<html>
<head>
<title>Search Box</title>

<!-- CSS styles for standard search box -->
<style type="text/css">
	#searchbox{
		background-color:#c3dfef;
                margin-left: auto ;
                margin-right: auto ;
	}
	#searchbox{
		float:right;
		padding:20px;
                margin-left: auto ;
                margin-right: auto ;
	}
	.tftextinput{
		margin-left: auto ;
                margin-right: auto ;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.tfbutton {
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, cantre, centre, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
	}
	.tfbutton:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
</style>
</head>
<body>
	<!-- HTML for SEARCH BAR -->
	<div id="searchbox">
		<form id="searchbox" method="post" action="esdelete.php">
		        <input  name="user_id" class="tftextinput" type="text" placeholder="UID">
                        <input type="submit" name="delete" value="delete" class="tfbutton">
		</form>
	<div class="tfclear"></div>
	</div>
</body>
</html>



<?php  

//include("db_connection.php");  
include("dbconnectin.inc.php");  
if(isset($_POST['delete']))//this will tell us what to do if some data has been post through form with button.  
{  
     
    $user_id=$_POST['user_id'];
     echo "$user_id";
    //delete query  
    //$delete_query1=;
    //$delete_query2=;
    //$delete_query3=;
    //$delete_query4=;
    
    $test=mysql_query("DELETE FROM `login_info` WHERE UID = 31067");  
    $return = 'deleted';
    if($test){
    echo "User deleted";    
    } 
     
    if($return == 'deleted')  
    {  
        mysql_query("DELETE FROM personal_info WHERE UID=$user_id");
        mysql_query("DELETE FROM medical_info WHERE UID=$user_id");
        mysql_query("DELETE FROM financial_info WHERE UID=$user_id");
        mysql_query("DELETE FROM criminal_info WHERE UID=$user_id");
        $set = 'deleted';
        /*if(mysqli_query($dbcon, $delete_query1))
        {
            if(mysqli_query($dbcon, $delete_query2))
            {
                if(mysqli_query($dbcon,$delete_query3))
                {
                    if(mysqli_query($dbcon,$delete_query4))
                    {
                        echo"<script>window.open('essearch.php','_self')</script>";  
                        
                    }
                }
            }
        }  */
        
    }
   // if($set == 'deleted')  
    //{  
    //javascript function to open in the same window   
     //echo "<script>window.open('essearch.php?deleted=user has been deleted','_self')</script>";  
    //}
  
}
  
?>
