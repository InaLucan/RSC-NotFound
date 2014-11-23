<?php include_once 'konfiguracija.php';
$try=$con->prepare("select * from OPERATER where email_ope=:email");
$try->execute($_POST);
$src=$try->fetch(PDO::FETCH_OBJ);
if ($src!=NULL) {
$length = 8;
$randomPass = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
$randomPass;
$to="$src->email_ope";
$subject = "Promjena lozinke";
$message = "Promijenili ste lozinku. Vaša nova lozinka je: $randomPass";
$header = "From: Administrator  <admin@admin.hr> \r\n";
mail($to, $subject, $message, $header);
$update=$con->prepare("update OPERATER set lozinka_ope=md5('$randomPass') where email_ope=:email");
$update->execute($_POST);
}
