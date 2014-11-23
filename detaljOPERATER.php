<?php 
include_once 'header.php';
$oper = $con->prepare("select * from OPERATER inner join INSTITUCIJA on OPERATER.id_ins=INSTITUCIJA.id_ins where OPERATER.id_ope=:id_ope;");
$oper->bindParam(":id_ope", $_GET['id_ope']);
$oper->execute();
$result = $oper->fetch(PDO::FETCH_OBJ);
?>
<div class="row gore2">
  <h3 style="color: white;">Operater</h3>
  <a href="<?php echo $putanja;?>updateOPERATER.php?id_ope=<?php echo $_GET['id_ope'];?>">
		<div class="button dva">
			PROMJENI	
		</div>
	</a>
	</div>
	
<div class="row druga">	
	<div class="small-10 small-centered columns">
		<div class="small-12 medium-4 columns">
<h4 style="color: white;">Naziv</h4>
<p> <?php echo $result->ime_ope;?> <?php echo $result->prezime_ope;?></p>
	</div>
	<div class="small-12 medium-4 columns">
<h4 style="color: white;">Naziv</h4>
<p> <?php echo $result->email_ope;?> </p>
	</div>
	<div class="small-12 medium-4 columns">
<h4 style="color: white;"> Administrator ustanove: </h4><?php if($result->id_ins == 0) {?> <p> NE </p> <?php }else{?>
																<p> <?php echo $result->ime_ins;?> </p>
																<?php };?>
	
</div>
</div>
</div>
	<!--									
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
	-->
<?php include_once 'footer.php';?>


