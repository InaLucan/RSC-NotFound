<?php 
include_once 'header.php';
$op = $con->prepare("select * from OPERATER inner join INSTITUCIJA on OPERATER.id_ins=INSTITUCIJA.id_ins where OPERATER.id_ope=:id_ope;");
$op->bindParam(":id_ope", $_GET['id_ope']);
$op->execute();
$res = $op->fetch(PDO::FETCH_OBJ);
?>
<div class="row gore2">
  <h3 style="color: white;">Ažuriraj operatera</h3>
  <a href="<?php echo $putanja;?>updatePASSWORD.php">
	<div class="button dva">
		PROMJENI LOZINKU
	</div>
</a>
	</div>
	
<div class="row druga">	
	<div class="small-10 small-centered columns">
		<div class="small-12 small-centered medium-6 columns ">
<form action="promjeniOPERATER.php" method="POST">
<h4 style="color: white;"> Ime: </h4>
<input type="text" name="ime_ope" value="<?php echo $res->ime_ope;?>" />

<h4 style="color: white;"> Prezime: </h4>
<input type="text" name="prezime_ope" value="<?php echo $res->prezime_ope;?>" />

<h4 style="color: white;"> e-mail: </h4>
<input type="text" name="email_ope" value="<?php echo $res->email_ope;?>" />

<h4 style="color: white;"> Istitucija: </h4>								
	<select name="id_ins">
		<option value="0"> Nije administrator </option>
		<?php 
		$izraz = $con->prepare("select * from INSTITUCIJA;");
		$izraz->execute();
		$val = $izraz->fetchAll(PDO::FETCH_OBJ);
		foreach ($val as $v):
		?>
		<option value="<?php echo $v->id_ins;?>">
			<?php echo $v->ime_ins;?>
		</option>
		<?php 
		endforeach;
		$con = null;
		?>
	</select>
	<div class="row">
<input type="submit" class="button" value="AŽURIRAJ"/>
</div>
</form>
</div>
</div>
</div>


