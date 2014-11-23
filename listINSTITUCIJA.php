<?php include 'header.php';?>
<div class="row gore">
  <h3 style="color: white;">Institucije</h3>

  
  <form class="small-12 medium-8 small-centered columns" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	
	<input type="text" name="uvjet" value="<?php echo isset($_POST["uvjet"]) ? $_POST["uvjet"] : "";?>"/>
	<input type="submit" class=" button" value="TRAŽI" />
	
	
</form>
<a href="inputINSTITUCIJA.php">
	<div class="button">
		DODAJ INSTITUCIJU
	</div>
</a>
</div>
<div class="row" style="text-align: center;">
<div class="small-10 small-centered columns">
<?php
	$list = $con->prepare("select * from INSTITUCIJA where INSTITUCIJA.ime_ins like :uvjet;");
	if(!$_POST) { 
			$uvjet=""; 
			} else {
				$uvjet = $_POST["uvjet"];
			}
	$uvjet = "%" . $uvjet . "%";	
	$list->bindParam(":uvjet", $uvjet);
	$list->execute();
	$rez = $list->fetchAll(PDO::FETCH_OBJ);
	foreach ($rez as $r): 
?>
<div class="small-12 columns">
	<h4><?php echo $r->ime_ins ;?></h4>
</div>
<div class="small-12 small-centered columns">
	<div class="small- medium-4 columns">
	<p><?php echo $r->mjesto_ins ;?></p>
	</div>
	<div class="small-12 medium-4 columns">
	<p><?php echo $r->info_ins ;?></p>
	</div>
	<div class="small-12 medium-4 columns" style="text-align:center;">
	<div class="button"><a href="<?php echo $putanja;?>detaljINSTITUCIJA.php?id_ins=<?php echo $r->id_ins;?>" style="color: #eb6054;"> DETALJNIJE </a> </div>
	</div>
	</div>
 <hr style="border: none; background-color: #eb6054; width: 75%; height: 2px; margin: 0 auto;" />
<?php
	endforeach;
	$con = null;
;?>	
	</div>
</div>
<?php include_once 'footer.php';?>



