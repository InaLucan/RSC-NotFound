<?php include_once 'konfiguracija.php';
$upd = $con->prepare("update INSTITUCIJA set ime_ins=:ime_ins, info_ins=:info_ins, mjesto_ins=:mjesto_ins, adresa_ins=:adresa_ins, nivo_krvi_ins=:nivo_krvi_ins where id_ins=:id_ins;");
$upd->bindValue(":ime_ins", $_POST['ime_ins']);
$upd->bindValue(":mjesto_ins", $_POST['mjesto_ins']);
$upd->bindValue(":adresa_ins", $_POST['adresa_ins']);
$upd->bindValue(":info_ins", $_POST['info_ins']);
$upd->bindvalue(":nivo_krvi_ins", $_POST['nivo_krvi_ins']);
$upd->execute($_POST);
header("location: listINSTITUCIJA.php");
