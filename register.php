<?php include_once 'header.php';?>


<?php 
	if($_GET['poruka'] == 1) {?>
		<div class="row">
			<div class="small-12 columns">
				<h4 style="color:red;">Obavezan je unos svih podataka</h4>
			</div>
		</div>
<?php	}
;?>

<form action="<?php echo $putanja;?>dodajOPERATER.php" method="POST">
	<p> Ime </p>
	<input type="text" name="ime" />
	<p> Prezime </p>
	<input type="text" name="prezime" />
	<p> Institucija u kojoj ste zaposleni</p>
	<select name="institucija">
		<option value="1"> KBC Osijek </option>
		<option value="2"> Dom Zdravlja </option>
		<option value="3"> Dom Zdravlja Retfala </option>
		<option value="4"> Crveni križ Osijek </option>		
	</select>
	<p> E-mail </p>
	<input type="text" name="email" />
	<p> Lozinka </p>
	<input type="password" name="pass" />	
</form>
