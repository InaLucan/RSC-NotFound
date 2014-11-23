<?php
include_once 'header.php';
if($_SESSION['super']==0) {
	header("location: listINSTITUCIJA.php");
}
?>

<div class="row gore2">
  <h3 style="color: white;">Dodaj instituciju</h3>
	</div>

<div class="row druga">	
	<div class="small-10 small-centered columns">
		<div class="small-12 small-centered medium-6 columns ">
<form action="dodajINSTITUCIJA.php" method="POST">
		<h4 style="color: white;">Naziv</h4>
		<input type="text" name="ime_ins"  />
		<h4 style="color: white;"> Mjesto</h4>
		<input type="text" name="mjesto_ins"  />
		<h4 style="color: white;"> Adresa</h4>
		<input type="text" name="adresa_ins"  />
		<h4 style="color: white;"> Opis</h>
		<textarea rows="6" cols="10" name="info_ins">  </textarea>
		<h4 style="color: white;"> Minimalna količina zaliha</h4>
		<input type="text" name="nivo_krvi_ins"  />
<input type="submit" class="button" value="DODAJ"/>
</form>
</div>
</div>
</div>

<?php include_once 'footer.php';?>