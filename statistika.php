<?php include_once 'header.php';
ini_set('display_errors',1);  error_reporting(E_ALL);?>
<?php
$con=mysql_connect("oziz.ffos.hr","notfound","notfound") or die("Failed to connect with database!!!!");
mysql_select_db("notfound", $con); 
$sth = mysql_query("SELECT ime_don, broj_donacija FROM DONATOR;");

$rows = array();
$flag = true;
$table = array();
$table['cols'] = array(

    array('label' => 'broj donacija', 'type' => 'string'),
    array('label' => 'postotak', 'type' => 'number')

);

$rows = array();
while($r = mysql_fetch_assoc($sth)) {
    $temp = array();
    $temp[] = array('v' => (string) $r['ime_don']); 
    $temp[] = array('v' => (int) $r['broj_donacija']); 
    $rows[] = array('c' => $temp);
}

$table['rows'] = $rows;
$jsonTable = json_encode($table);
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">
    google.load('visualization', '1', {'packages':['corechart']});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable(<?=$jsonTable?>);
      var options = {
           title: '',
          is3D: 'false',
          width: 400,
          height: 300
        };

      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
  </head>

  <body>
    <div id="chart_div"></div>
  </body>
</html>
	</head>
	<body>
		<div id="container" style="min-width: 250px; height: 250px; margin: 0 auto"></div>