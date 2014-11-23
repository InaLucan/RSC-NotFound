<?php
  include_once 'header.php';
?>
<div class="row druga">
		<div class="small-12 columns">
			<a href="<?php echo $putanja;?>inputDONACIJA.php"><div class="button large" style="text-align: center;"> Doniraj </div></a>
		</div>
		<div class="small-12 columns">
			<a href="../listQUEST.php"><div class="button large" style="text-align: center;"> Misije </div></a>
		</div>
		<div class="small-12 columns">
			<a href="../listREWARD.php"><div class="button large" style="text-align: center;"> Nagrade </div></a>
		</div>
</div>
<div class="row druga">
    <div class="medium-centered small-12 medium-10 columns">
		<?php
			$don3 = $con->prepare("select COUNT(id_donacije) from DONACIJA inner join DONATOR on DONACIJA.id_don=DONATOR.id_don where DONATOR.id_don=:id_don;");
			$don3->bindParam(":id_don", $_GET['id_don']);
			$don3->execute();
			$rez3 = $don3->fetch(PDO::FETCH_NUM);	
		?>
		<p>Broj donacija</p>
		<h1 style="text-align: center;"><?php echo $rez3[0];?></h1>
	</div>
</div>
<div class="row treca">
	<div class="small-12 small-centered columns">
		<?php
			$klas = $con->prepare("select * from DONATOR inner join KRV on KRV.id_krv=DONATOR.id_krv where DONATOR.id_don=:id_don;");
			$klas->bindParam(":id_don", $_GET['id_don']);
			$klas->execute();
			$wat = $klas->fetch(PDO::FETCH_OBJ);		
		?>
		<div class="small-12 columns" style="text-align: center;">
			<p style="text-align: center;"> <?php echo $wat->klasa_krv;?> </p>
			<img src="<?php echo $putanja;?>img/<?php echo $wat->id_krv;?>.svg" />
		</div>
</div>
</div>

<div class="row treca">
	<div class="small-12 columns" style="text-align: center;">
		<p> Ovdje idu obavijesti o traženim donacijama za krvnu grupu ulogiranog donatora </p>
		<?php
		$qst = $con->prepare("select * from OBAVIJEST inner join ZALIHE on ZALIHE.id_zal=OBAVIJEST.id_zal inner join KRV on KRV.id_krv=ZALIHE.id_krv order by OBAVIJEST.datum_oba desc limit 5 where KRV.id_krv=:id_krv;");
		$qst->bindParam(":id_krv", $wat->id_krv);
		$qst->execute();
		$g = $qst->fetchAll(PDO::FETCH_OBJ);
		foreach ($g as $t):
		?>
		<p> <?php echo $t->id_oba;?>, <?php echo $t->opis_oba;?>, <?php echo $t->datum_oba;?> </p>
		<?php 
		endforeach;
		$con=null;
		?>
	</div>
</div>
<?php include_once 'footer.php';?>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
