<?php
include_once 'header.php';
if(!isset($_SESSION['ulogiran'])) {
	header("location: index.php");
}

$get = $con->prepare("select * from INSTITUCIJA inner join OPERATER on OPERATER.id_ins=INSTITUCIJA.id_ins where INSTITUCIJA.id_ins=:id_ins;");
$get->bindParam(":id_ins", $_GET['id_ins']);
$get->execute();
$ent = $get->fetch(PDO::FETCH_OBJ);
?>
<div class="row gore2">
  <h3 style="color: white;">Ažuriraj instituciju</h3>
	</div>
<div class="row druga">	
	<div class="small-10 small-centered columns">
		<div class="small-12 small-centered medium-6 columns ">
<form action="promjeniINSTITUCIJA.php" method="POST">

<input type="hidden" name="id_ins" value="<?php echo $_GET['id_ins'];?>" />

		<h4 style="color: white;"> Naziv</h4>
		<input type="text" name="ime_ins" value="<?php echo $ent->ime_ins;?>" />

	
	
		<h4 style="color: white;"> Mjesto</h4>
		<input type="text" name="mjesto_ins" value="<?php echo $ent->mjesto_ins;?>" />
		<h4 style="color: white;"> Adresa</h4>
		<input type="text" name="adresa_ins" value="<?php echo $ent->adresa_ins;?>" />


		<h4 style="color: white;"> Opis</h4>
		<textarea rows="6" cols="10" name="info_ins"> <?php echo $ent->info_ins;?> </textarea>

		<h4 style="color: white;"> Minimalna količina zaliha </h4>
		<input type="text" name="nivo_krvi_ins" value="<?php echo $ent->nivo_krvi_ins;?>" />
		

<div class="row">
<input type="submit" class="button" value="AŽURIRAJ"/>
</div>
</form>

</div>
</div>
</div>

<?php include_once 'footer.php';?>