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
                        <a href="crimegraph.php">Criminal Records</a>
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
    $output = 0;
    $result = 0;
    $dbdatabase = 'ace';
    $dbcon = mysql_connect("localhost","root","");  
    mysql_select_db($dbdatabase);  

$result = mysql_query("SELECT bank_balance FROM financial_info");
    $num_rows = mysql_num_rows($result);
    $uid = 31001;
    $u=0;
    $v=0;
    $w=0;
    $x=0;
    $y=0;
    $z=0;
    $s=0;
    for($i=1;$i<=$num_rows;$i++){
        $a = mysql_query("SELECT bank_balance FROM financial_info where UID=$uid");
        $row = mysql_fetch_assoc($a);
        if($row['bank_balance'] < 40000){
            $u++;
        }else if($row['bank_balance'] < 80000){
            $v++;
        }else if($row['bank_balance'] < 120000){
            $w++;
        }else if($row['bank_balance'] < 160000){
            $x++;
        }else if($row['bank_balance'] < 200000){
            $y++;
        }else if($row['bank_balance'] < 300000){
            $z++;
        }else{
            $s++;
        }
        $uid++;
    }
    $avgu = ($u/$num_rows)*100;
    $avgu = round($avgu, 2);
    $avgv = ($v/$num_rows)*100;
    $avgv = round($avgv, 2);
    $avgw = ($w/$num_rows)*100;
    $avgw = round($avgw, 2);
    $avgx = ($x/$num_rows)*100;
    $avgx = round($avgx, 2);
    $avgy = ($y/$num_rows)*100;
    $avgy = round($avgy, 2);
    $avgz = ($z/$num_rows)*100;
    $avgz = round($avgz, 2);
    $avgs = ($s/$num_rows)*100;
    $avgs = round($avgs, 2);
    //echo "$avgu <br> $avgv <br> $avgw <br> $avgx <br> $avgy <br> $avgz <br> $avgs <br> ";
    $total=($avgu+$avgv+$avgw+$avgx+$avgy+$avgz+$avgs);       
    

?>

<html>
<head>
<title>Fianancial Report</title>
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
            "caption": "Financial Report",
            "xAxisName": "Annual Income",
            "yAxisName": "Percentage",
            "theme": "fint"
         },
         "data": [
            {
               "label": "0-40k",
               "value": "<?php echo $avgu ?>"
            },
            {
               "label": "40k-80k",
               "value": "<?php echo $avgv ?>"
            },
            {
               "label": "80k-120k",
               "value": "<?php echo $avgw ?>"
            },
            {
               "label": "120k-160k",
               "value": "<?php echo $avgx ?>"
            },
            {
               "label": "160k-200k",
               "value": "<?php echo $avgy ?>"
            },
            {
               "label": "200k-300k",
               "value": "<?php echo $avgz ?>"
            },
            {
               "label": "300k & above",
               "value": "<?php echo $avgs ?>"
            }
          ]
      }

  });
revenueChart.render();
})
</script>
</head>
<body>
  <div id="chartContainer" style="margin-left:30%; margin-top: 7%;">Financial Reports</div>
</body>
</html>