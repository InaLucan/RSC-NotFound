<?php
if(!isset($_POST['email_don'])) {
echo "false";
exit;
}
include_once 'konfiguracija.php';


$izraz=$con->prepare("select * from DONATOR where email_don=:email_don and lozinka_don=:lozinka_don");
$_POST[":lozinka_don"] = md5($_POST["lozinka_don"]);
$izraz->execute($_POST);
$operater=$izraz->fetch(PDO::FETCH_OBJ);
if($operater!=null){
	session_start();
	$_SESSION['ulogiran']=$operater->ime_don . " " . $operater->prezime_don;
	$_SESSION['operater']=$operater->id_don;
	$id = $_SESSION['operater'];
	header("location: home.php?id_don=$id;");
}
else{
	echo "Pogrešan email ili lozinka!"; 
	}