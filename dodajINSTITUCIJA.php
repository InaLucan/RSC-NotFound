<?php 
ini_set('display_errors',1); 
 error_reporting(E_ALL); 
include 'konfiguracija.php';
$ime = $_POST['ime_ins'];
$info = $_POST['info_ins'];
$mjesto = $_POST['mjesto_ins'];
$adresa = $_POST['adresa_ins'];
$nivo = $_POST['nivo_krvi_ins'];
$ins = $con->prepare("insert into INSTITUCIJA (ime_ins, info_ins, mjesto_ins, adresa_ins, nivo_krvi_ins) values ('$ime', '$info', '$mjesto', 'adresa', $nivo);");
$ins->execute();
header("location: listINSTITUCIJA.php");