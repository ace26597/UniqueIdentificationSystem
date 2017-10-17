





<html>
<head>
<title>My first chart using FusionCharts Suite XT</title>
<script type="text/javascript" src="fusioncharts.js"></script>
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
               "value": "420000"
            },
            {
               "label": "Conspiracy",
               "value": "810000"
            },
            {
               "label": "Murder",
               "value": "720000"
            },
            {
               "label": "None",
               "value": "550000"
            }
          ]
      }

  });
revenueChart.render();
})
</script>
</head>
<body>
  <div id="chartContainer">Crimes</div>
</body>
</html>