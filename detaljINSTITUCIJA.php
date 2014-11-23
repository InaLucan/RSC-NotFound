<?php
include_once 'header.php';
//if(!isset($_SESSION['ulogiran'])); {
	//header("location: listINSTITUCIJA.php");
//}
$mm = $_GET['id_ins'];
$det = $con->prepare("select * from INSTITUCIJA inner join OPERATER on OPERATER.id_ins=INSTITUCIJA.id_ins where INSTITUCIJA.id_ins=$mm;");
$det->execute();
$jej = $det->fetch(PDO::FETCH_OBJ);
?>
<div class="row gore2">
  <h3 style="color: white;"><?php echo $jej->ime_ins;?></h3>
  <a href="updateINSTITUCIJA.php?id_ins=<?php echo $_GET['id_ins'];?>">
	<div class="button dva">
		Promjeni
	</div>
	</a>
	</div>
	
	
	
<div class="row druga">	
	<div class="small-10 small-centered columns">
		<div class="small-12 columns">
		<div class="small-12 medium-2 columns">
		<h4> Mjesto</h4>
		<p><?php echo $jej->mjesto_ins;?></p>
		</div>
		<div class="small-12 medium-2 columns">
		<h4> Adresa</h4>
		<p><?php echo $jej->adresa_ins;?></p>
		</div>

		<div class="small-12 medium-3 columns">
		<h4> Opis</h4>
		<p><?php echo $jej->info_ins;?></p>
	</div>
	<div class="small-12 medium-2 columns">
		<h4> Minimalna zaliha</h4>
		<p><?php echo $jej->nivo_krvi_ins;?></p>
		</div>
		<?php 
			$bld = $con->prepare("select * from ZALIHE inner join KRV on KRV.id_krv=ZALIHE.id_krv inner join INSTITUCIJA on INSTITUCIJA.id_ins=ZALIHE.id_ins where ZALIHE.id_ins=:id_ins;");
			$bld->bindParam(":id_ins", $_GET['id_ins']);
			$bld->execute();
			$info = $bld->fetchAll(PDO::FETCH_OBJ);
			foreach($info as $i):
		?>
		<input type="hidden" value="<?php echo $i->grupa_krv;?>" />
		<input type="hidden" name="zaliha_<?php echo $i->id_krv;?>" value="<?php echo $i->kolicina_zal;?>" />
		
		<?php
			$zal = "zaliha_" . $i->id_krv;
			$kol = $i->kolicina_zal;
			if($zal > $kol) {
				//source: http://www.pontikis.net/tip/?id=18
				//$dt = new DateTime();
				//$vrijeme = $dt->format('Y-m-d H:i:s');
				//
				
				
			}
			endforeach;
		?>


<?php if($_SESSION['super'] == 0) { ?>
<div class="small-12 medium-2 columns">
		<h4> Administrator ustanove</h4>
		<p><?php echo $jej->ime_ope;?> <?php echo $jej->prezime_ope;?></p>
</div>

<?php }else{ ?>
<div class="small-12 medium-2 columns">
		<h4> Administrator ustanove</h4>
		<p><?php echo $jej->ime_ope;?> <?php echo $jej->prezime_ope;?></p>
		<a href="<?php echo $putanja;?>detaljOPERATER.php?id_ope=<?php echo $jej->id_ope;?>">
		<div class="button">
			PROFIL
		</div>
		</a>
</div>
	</div>
	</div>
	</div>
<?php };?>
<?php include_once 'footer.php';?>