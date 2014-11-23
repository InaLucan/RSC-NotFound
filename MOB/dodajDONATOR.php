<?php include 'header.php';?>

<form method="POST" action="inputDONATOR.php">
<div class="row">
	<p> Ime</p>
	<input type="text" id="ime_don" name="ime_don">
</div>
<div class="row">
	<p> Prezime </p>
	<input type="text" id="prezime_don" name="prezime_don">
	</div>
<div class="row">
	<p> OIB </p>
	<input type="text" id="oib_don" name="oib_don">
	</div>
<div class="row">
	<p> Email </p>
	<input type="text" id="email_don" name="email_don">
	</div>
<div class="row">
	<p> Lozinka </p>
	<input type="password" id="lozinka_don" name="lozinka_don">
	</div>
<div class="row">
	<p> Spol </p>
	<select name="spol_don">
		<option value="1"> Muško </option>
		<option value="2"> Žensko </option>
	</select>
	</div>
<div class="row">
	<p> Tetovaža </p>
	<input type="checkbox" id="tetovaza_don" name="tetovaza_don">
	</div>
<div class="row">
	<p> Piercing </p>
	<input type="checkbox" id="piercing_don" name="piercing_don">
	</div>
<div class="row">
	<p> Ovisnost o drogama </p>
	<input type="checkbox" id="ovisnost_droge" name="ovisnost_droge">
	</div>
<div class="row">
	<p> Krvna grupa </p>
	<select name="id_krv">
		<?php 
		$itt = $con->prepare("select * from KRV;");
		$itt->execute();
		$en = $itt->fetchAll(PDO::FETCH_OBJ);
		foreach ($en as $e):
		?>
		<option value="<?php echo $e->id_krv;?>"> <?php echo $e->grupa_krv;?> </option>
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