<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
                        <a href="esuserlogin.php">User Login</a>
                    </li>
                    <li>
                        <a href="essearch">search</a>
                    </li>
                    <li>
                        <a href="esstat.php">Statistics</a>
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
<html>
  <head>
    <title>Search User</title>
    <meta charset="utf-8" />
	<style>

		body { 
			background: #eee; 
		}

		/*------------------------------*/

		#search {
			width: 550px;
			height: 330px;
			margin: 100px auto 50px auto;
			padding: 20px;
			position: relative;
			background: #fff url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAECAMAAAB883U1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAlQTFRF7+/v7u7u////REBVnAAAAAN0Uk5T//8A18oNQQAAABZJREFUeNpiYGJiYmBiYgRiBhAGCDAAALsAFJhiJ+UAAAAASUVORK5CYII=);
			border: 1px solid #ccc;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px; 
			border-radius: 3px;  
		}

		#search::before, 
		#search::after {
			content: "";
			position: absolute;
			bottom: -3px;
			left: 2px;
			right: 2px;
			top: 0;
			z-index: -1;
			background: #fff;
			border: 1px solid #ccc;			
		}

		#search::after {
			left: 4px;
			right: 4px;
			bottom: -5px;
			z-index: -2;
			-moz-box-shadow: 0 8px 8px -5px rgba(0,0,0,.3);
			-webkit-box-shadow: 0 8px 8px -5px rgba(0,0,0,.3);
			box-shadow: 0 8px 8px -5px rgba(0,0,0,.3);
		}

		/*------------------------------*/

		#search h1 {
			position: relative;
			font: italic 1em/3.5em 'trebuchet MS',Arial, Helvetica;
			color: #999;
			text-align: center;
			margin: 0 0 20px;
		}

		#search h1::before,
		#search h1::after{
			content:'';
			position: absolute;
			border: 1px solid rgba(0,0,0,.15);
			top: 10px;
			bottom: 10px;
			left: 0;
			right: 0;
		}

		#search h1::after{
			top: 0;
			bottom: 0;
			left: 10px;
			right: 10px;
		}

		/*------------------------------*/

        ::-webkit-input-placeholder {
           color: #bbb;
        }
        
        :-moz-placeholder {
           color: #bbb;
        } 				    	

		.placeholder{
			color: #bbb; /* polyfill */
		}		

		#search input{
			margin: 5px 0;
			padding: 15px;
			width: 100%;
			*width: 518px;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			border: 1px solid #ccc;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;	
		}

		#search input:focus{
			outline: 0;
			border-color: #aaa;
			-moz-box-shadow: 0 2px 1px rgba(0, 0, 0, .3) inset;
			-webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, .3) inset;
			box-shadow: 0 2px 1px rgba(0, 0, 0, .3) inset;
		}		

		#search button{
			margin: 20px 0 0 0;
			padding: 15px 8px;			
			width: 100%;
			cursor: pointer;
			border: 1px solid #2493FF;
			overflow: visible;
			display: inline-block;
			color: #fff;
			font: bold 1.4em arial, helvetica;
			text-shadow: 0 -1px 0 rgba(0,0,0,.4);		  
			background-color: #2493ff;
			background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,.5)), to(rgba(255,255,255,0)));
			background-image: -webkit-linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			background-image: -moz-linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			background-image: -ms-linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			background-image: -o-linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			background-image: linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			-webkit-transition: background-color .2s ease-out;
			-moz-transition: background-color .2s ease-out;
			-ms-transition: background-color .2s ease-out; 
			-o-transition: background-color .2s ease-out;  
			transition: background-color .2s ease-out;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-moz-box-shadow:  0 2px 1px rgba(0, 0, 0, .3),
							  0 1px 0 rgba(255, 255, 255, .5) inset;
			-webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, .3),
								0 1px 0 rgba(255, 255, 255, .5) inset;
			box-shadow: 0 2px 1px rgba(0, 0, 0, .3),
						0 1px 0 rgba(255, 255, 255, .5) inset;			  						  
		}

		#search button:hover{
		  	background-color: #7cbfff;
            border-color: #7cbfff;
		}

		#search button:active{
			position: relative;
			top: 3px;
			text-shadow: none;
			-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .3) inset;
			-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .3) inset;
			box-shadow: 0 1px 0 rgba(255, 255, 255, .3) inset;
		}

		/* ------------------------------------------------- */

		#about{
		    color: #999;
		    text-align: center;
		    font: 0.9em Arial, Helvetica;
		}

		#about a{
		    color: #777;
		}		
	</style>    
  </head>

  <body>

  	<form id="search" role="form" method="post" action="befreg.php">
		<h1>Search For User</h1>
		<input type="text" name="lic" placeholder="Licence Number" >
		<input type="text" name="mail" placeholder="Email Address">
                <input type="text" name="ins" placeholder="Medical Insurance no">
		<input type="text" name="acc" placeholder="Bank acc no">					
		<button type="submit" value="submit" name="submit">Search</button>	
	</form>

	
  </body>

</html>

<?php  
include("db_connection.php");  
 
if(isset($_POST['submit']))//this will tell us what to do if some data has been post through form with button.  
{  
    $lic=$_POST['lic'];  
    $mail=$_POST['mail'];  
    $acc=$_POST['acc'];
    $ins=$_POST['ins'];
    
    $licv="select lic_no from personal_info where lic_no='$lic'";
    $mailv="select email_id from login_info where email_id='$mail'";
    $accv="select acc_no from financial_info where acc_no='$acc'";
    $insv="select Medical_insurance_no from medical_info where Medical_insurance_no='$ins'";
    
    $run_query1=mysqli_query($dbcon,$licv);
    $run_query2=mysqli_query($dbcon,$mailv);
    $run_query3=mysqli_query($dbcon,$accv);
    $run_query4=mysqli_query($dbcon,$insv);
    
    //$run_query=mysqli_query($dbcon,$admin_query);  
    
    if(mysqli_num_rows($run_query1)>0)  
    {    
        echo "<script>alert('lic are incorrect..!')</script>";  
        exit();
    }  
    if(mysqli_num_rows($run_query2)>0)  
    {
        echo "<script>alert('mail are incorrect..!')</script>";
        exit();
        
    }    
    if(mysqli_num_rows($run_query3)>0)  
    {
        echo "<script>alert('acc are incorrect..!')</script>";
        exit();
    }   
    if(mysqli_num_rows($run_query4)>0)  
    {
        echo "<script>alert('ins are incorrect..!')</script>";
        exit();
    }   
    else {echo"<script>window.open('esreg.php','_self')</script>";}  
  
}
?>  
