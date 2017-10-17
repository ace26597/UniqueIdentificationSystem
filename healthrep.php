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
                        <a href="financialrep.php">Financial Records</a>
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

    $result = mysql_query("SELECT Diseases FROM medical_info where Diseases='none'");
    $num_rows1 = mysql_num_rows($result);
    $output = mysql_query("SELECT Diseases FROM medical_info");
    $num_rows2 = mysql_num_rows($output);

    $none = ($num_rows1/$num_rows2)*100;
    //echo "$avg_num_rows\n";

    $result = mysql_query("SELECT Diseases FROM medical_info where Diseases='ASTHMA'");
    $num_rows1 = mysql_num_rows($result);
    $output = mysql_query("SELECT Diseases FROM medical_info");
    $num_rows2 = mysql_num_rows($output);

    $asthama = ($num_rows1/$num_rows2)*100;
    //echo "<br>$avg_num_rows\n";

    $result = mysql_query("SELECT Diseases FROM medical_info where Diseases='BP'");
    $num_rows1 = mysql_num_rows($result);
    $output = mysql_query("SELECT Diseases FROM medical_info");
    $num_rows2 = mysql_num_rows($output);

    $BP = ($num_rows1/$num_rows2)*100;
    
    $others = 100 - ($none + $asthama + $BP);

?>



<html>
<head>
<title>Health Report</title>
<script type="text/javascript" src="js/fusioncharts.js"></script>
<script type="text/javascript" src="fusioncharts/js/themes/fusioncharts.theme.fint.js"></script>
<script type="text/javascript">
  FusionCharts.ready(function () {
    var revenueChart = new FusionCharts({
        type: 'doughnut2d',
        renderAt: 'chartContainer',
        width: '450',
        height: '450',
        dataFormat: 'json',
        dataSource: {
            "chart": {
                "caption": "Health Report according to Diseases",
                "numberSuffix": "%",
                "paletteColors": "#0075c2,#1aaf5d,#f2c500,#f45b00,#8e0000",
                "bgColor": "#ffffff",
                "showBorder": "0",
                "use3DLighting": "0",
                "showShadow": "0",
                "enableSmartLabels": "0",
                "startingAngle": "310",
                "showLabels": "0",
                "showPercentValues": "1",
                "showLegend": "1",
                "legendShadow": "0",
                "legendBorderAlpha": "0",
                "defaultCenterLabel": "Healthy People: <?php echo $none ?>",
                "centerLabel": "Revenue from $label: $value",
                "centerLabelBold": "1",
                "showTooltip": "0",
                "decimals": "0",
                "captionFontSize": "14",
                "subcaptionFontSize": "14",
                "subcaptionFontBold": "0"
            },
            "data": [
                {
                    "label": "Asthama",
                    "value": "<?php echo $asthama ?>"
                }, 
                {
                    "label": "BP",
                    "value": "<?php echo $BP ?>"
                }, 
                {
                    "label": "None",
                    "value": "<?php echo $none ?>"
                }, 
                {
                    "label": "Others",
                    "value": "<?php echo $others ?>"
                }
            ]
        }
    }).render();
});
</script>
</head>
<body>
  <div id="chartContainer" style="margin-left:30%; margin-top: 7%;">Health</div>
</body>
</html>

