<?php include 'header.php';?>
<form action="<?php echo $putanja;?>promjeniPASSWORD.php" method="POST">
			<label for="email">Unesite svoju email adresu za promjenu lozinke</label>
			<input type="text" name="email" id="email"/>
			<input type="submit" class="button" value="Promijeni!" />
</form>