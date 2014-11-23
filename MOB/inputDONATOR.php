<?php include 'konfiguracija.php';
$izraz = $con->prepare("insert into DONATOR (ime_don, prezime_don, oib_don, email_don, lozinka_don, spol_don, tetovaza_don, piercing_don, ovisnost_droge, id_krv)  
	values (:ime_don, :prezime_don, :oib_don, :email_don, :lozinka_don, :spol_don, :tetovaza_don, :piercing_don, :ovisnost_droge, :id_krv) ");

$izraz->bindValue(":lozinka_don", md5($_POST['lozinka_don']));
$izraz->bindValue(":ime_don", $_POST['ime_don']);
$izraz->bindValue(":prezime_don", $_POST['prezime_don']);
$izraz->bindValue(":oib_don", $_POST['oib_don']);
$izraz->bindValue(":email_don", $_POST['email_don']);
$izraz->bindValue(":spol_don", $_POST['spol_don']);
$izraz->bindValue(":tetovaza_don", $_POST['tetovaza_don']);
$izraz->bindValue(":piercing_don", $_POST['piercing_don']);
$izraz->bindValue(":ovisnost_droge", $_POST['ovisnost_droge']);
$izraz->bindValue(":id_krv", $_POST['id_krv']);
$izraz->execute();
header ("location: index.php");
