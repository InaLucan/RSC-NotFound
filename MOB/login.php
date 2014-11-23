<div id="login" class="reveal-modal" data-reveal style="background-color: #eb6054; width: 50%; text-align: center; color:white;">
	<form action="<?php echo $putanja;?>prijava.php" method="POST">
			<p>Unesite svoj email i lozinku</p>
			<label for="email_ope">Email</label>
			<input type="text" name="email_don" id="email_don" value="imatkovis@gmail.com"/>
			<label for="lozinka_ope">Lozinka</label>
			<input type="password" name="lozinka_don" id="lozinka_don" value="ivan"/>
			<input type="submit" class="button dva" value="Login!" />
			<p></p>
			<a href="<?php echo $putanja?>resetPASSWORD.php" style="color: white;">Zaboravljena lozinka?</a>
</form>
  <a class="close-reveal-modal">&#215;</a>
</div>
