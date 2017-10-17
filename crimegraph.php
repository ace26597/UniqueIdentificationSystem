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
                        <a href="financialrep.php">Financial Records</a>
                    </li>
                    <li>
                        <a href="healthrep.php">Medical Records</a>
                    </li>
                    <li>
                        <a href="essearch.php">Search Page</a>
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


<?php
    $dbdatabase = 'ace';
    $dbcon = mysql_connect("localhost","root","");  
    mysql_select_db($dbdatabase);  
   
    $output = mysql_query("SELECT crime FROM criminal_info");
    $num_rows = mysql_num_rows($output);
    
    $result1 = mysql_query("SELECT crime FROM criminal_info where crime='rape'");
    $num_rows1 = mysql_num_rows($result1);
    $rape = ($num_rows1/$num_rows)*100;
    $rape = round($rape , 2);

    $result2 = mysql_query("SELECT crime FROM criminal_info where crime='conspiracy'");
    $num_rows2 = mysql_num_rows($result2);
    $consp = ($num_rows2/$num_rows)*100;
    $consp = round($consp, 2);

    $result3 = mysql_query("SELECT crime FROM criminal_info where crime='murder'");
    $num_rows3 = mysql_num_rows($result3);
    $murder = ($num_rows3/$num_rows)*100;
    $murder = round($murder, 2);

    $result4 = mysql_query("SELECT crime FROM criminal_info where crime='none'");
    $num_rows4 = mysql_num_rows($result4);
    $none = ($num_rows4/$num_rows)*100;
    $none = round($none, 2);
    
    $other = (100-($rape+$murder+$none+$consp));

?>

<?php

include("db_connection.php");
include("include.inc.php");

$query = mysql_query("select place FROM criminal_info WHERE crime='conspiracy'");
$var1 = '1300';
$var2 = '1500';
?>







<html>
<head>
<title>Crime Report</title>
<script type="text/javascript" src="js/fusioncharts.js"></script>
<script type="text/javascript" src="fusioncharts/js/themes/fusioncharts.theme.fint.js"></script>
<script type="text/javascript">
  FusionCharts.ready(function(){
    var revenueChart = new FusionCharts({
        "type": "column2d",
        "renderAt": "chartContainer",
        "width": "500",
        "height": "300",
        "dataFormat": "json",
        "dataSource":  {
          "chart": {
            "caption": "Crime Report",
            "xAxisName": "Crimes",
            "yAxisName": "Percentage",
            "theme": "fint"
         },
         "data": [
            {
               "label": "Rape",
               "value": "<?php echo $rape ?>"
            },
            {
               "label": "Conspiracy",
               "value": "<?php echo $consp ?>"
            },
            {
               "label": "Murder",
               "value": "<?php echo $murder ?>"
            },
            {
               "label": "None",
               "value": "<?php echo $none ?>"
            },
            {
               "label": "others",
               "value": "<?php echo $other ?>"
            }
          ]
      }

  });
revenueChart.render();
})
</script>
</head>
<body>
  <div id="chartContainer" style="margin-left:30%; margin-top: 7%;">Crimes</div>
</body>
</html>