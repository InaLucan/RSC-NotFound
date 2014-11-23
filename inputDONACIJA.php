<?php include_once 'header.php';?>

<form action="dodajDONACIJA.php" method="POST">
<div class="druga">
<input type="hidden" name="id_don" value="<?php echo $_SESSION['operater'];?>" />
<?php
	$dt = new DateTime();
	$vrijeme = $dt->format('Y-m-d');
?>
<input type="hidden" name="datum" value="<?php echo $vrijeme;?>" />
<h3 style="text-align:center;"> Kojoj ustanovi donirate krv? </h3>
<div class="small-12 columns" style="text-align:center;">
	<select name="id_ins">
		<?php 
		$ins = $con->prepare("select * from INSTITUCIJA;");
		$ins->execute();
		$zz = $ins->fetchAll(PDO::FETCH_OBJ);
		foreach ($zz as $z):
		?>
		<option value="<?php echo $z->id_ins;?>">
			<?php echo $z->ime_ins;?>
		</option>
		<?php
		endforeach;
		$con=null;
		?>
	</select>
</div>
<input type="submit" class="button" value="Dodaj!" />
</div>
</form>
<?php include_once 'footer.php' ;?>