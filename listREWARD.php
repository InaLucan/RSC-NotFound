<?php include 'header.php';?>
<div class="row gore">
  <h1 class="naslovnice">Nagrade</h1>


</div>
<div class="row" style="text-align: center;">
<div class="small-10 small-centered columns">
<?php
	$list = $con->prepare("select * from REWARD;");
	$list->execute();
	$rez = $list->fetchAll(PDO::FETCH_OBJ);
	foreach ($rez as $r): 
?>
<div class="small-12 columns">
	<h2><?php echo $r->reward_name ;?></h2>
</div>
<div class="small-12 small-centered columns">
	<div class="small- medium-2 columns">
	<p><?php echo"" ;?></p>
	</div>
	<div class="small- medium-2 columns">
	<p><?php echo "*";?></p>
	</div>
	<div class="small- medium-4 columns">
	<p><?php echo $r->reward_text ;?></p>
	</div>
	<div class="small- medium-2 columns">
	<p><?php echo "Potrebni bodovi ". $r->reward_points ;?></p>
	</div>
	<div class="small-2 medium-2 columns">
	<?php if(isset($_SESSION['ulogiran'])) { ?>
	<?php };?>
	</div>
	</div>
 <hr style="border: none; background-color: #eb6054; width: 75%; height: 2px; margin: 0 auto;" />
<?php
	endforeach;
	$con = null;
;?>	
	</div>
</div>




