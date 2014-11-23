<?php
include_once 'konfiguracija.php';

$result = $con->prepare("SELECT ime_don, broj_donacija FROM DONATOR;");
$result->execute();
$rows = array();
while($r = mysql_fetch_array($result)) {
	echo "123";
	$row[0] = $r[0];
	$row[1] = $r[1];
	array_push($rows,$row);
}
echo mysql_fetch_array($result);
echo json_encode($result->fetchAll(PDO::FETCH_COLUMN));



