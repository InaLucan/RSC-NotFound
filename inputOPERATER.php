<?php include 'header.php';?>

<form method="POST" action="dodajOPERATER.php">
<div class="row">
	<p> Ime</p>
	<input type="text" id="ime_ope" name="ime_ope">
</div>
<div class="row">
	<p> Prezime </p>
	<input type="text" id="prezime_ope" name="prezime_ope">
	</div>
<div class="row">
	<p> Email </p>
	<input type="text" id="email_ope" name="email_ope">
	</div>
<div class="row">
	<p> Lozinka </p>
	<input type="password" id="lozinka_ope" name="lozinka_ope">
	</div>

<div class="row">
	<p> Ustanova u kojoj ste zaposleni </p>
	<select name="id_ins">
		<?php 
		$itt = $con->prepare("select * from INSTITUCIJA;");
		$itt->execute();
		$en = $itt->fetchAll(PDO::FETCH_OBJ);
		foreach ($en as $e):
		?>
		<option value="<?php echo $e->id_ins;?>"> <?php echo $e->ime_ins;?> </option>
		<?php
		endforeach;
		$con = null;
		?>
	</select>
</div>
</div class="row">
	<input type="submit" class="button" value="Pošalji" />
</div>
</form>

<?php include 'footer.php';?>