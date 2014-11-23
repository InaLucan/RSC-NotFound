<?php include 'konfiguracija.php';
$izraz = $con->prepare("insert into OPERATER (ime_ope, prezime_ope, email_ope, lozinka_ope, id_ins)  
	values (:ime_ope, :prezime_ope, :email_ope, :lozinka_ope, :id_ins) ");

$izraz->bindValue(":lozinka_ope", md5($_POST['lozinka_ope']));
$izraz->bindValue(":email_ope", $_POST['email_ope']);
$izraz->bindValue(":ime_ope", $_POST['ime_ope']);
$izraz->bindValue(":prezime_ope", $_POST['prezime_ope']);
$izraz->bindValue(":id_ins", $_POST['id_ins']);
$izraz->execute();
header ("location: index.php");
