<?php include_once 'header.php';?>
  <div class="uvod" >
 <div class="row">
 <div class="small-12 medium-10 small-centered columns glavna">
 <div class="medium-5 columns" >
 <h1 class="naslov">Doniranje <span style="color:#eb6054">krvi</span> postalo je <span style="color: #eb6054">zabavno</span></h1>
 <p class="podnaslov" style="text-align: right">Ozbiljno.</p>
 </div>
 <div class="medium-5 columns" style="text-align: left">
 <img src="img/mage.svg">
 <p class="podnaslov">Crimson Quest</p>
 </div>
 </div>
 </div>
  </div>
<div class="row prva">
    <div class="small-centered small-12 medium-10 columns">
	<div class="small-centered small-12 columns">
		<div class="small-12 medium-5 columns">
		<h1>Tko može pomoći</h1>
		<p>Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita. Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita. Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita. Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita. Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita.
		</p>
		</div>
		<div class="small-12 medium-5 columns">
		<h1>Komu pomoć treba</h1>
		<p>Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita. Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita. Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita. Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita. Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita.
		</p>
		</div>
		</div>
	</div>
</div>


<div class="row druga"  style="">
<div class="medium-12 medium-centered columns">
<div class="medium-4 columns">
<!-- brojač donatora -->
		<?php
			$don1 = $con->prepare("select COUNT(id_don) from DONATOR;");
			$don1->execute();
			$rez1 = $don1->fetch(PDO::FETCH_NUM);	
		?>
		<h1><?php echo $rez1[0];?></h1>
		<p>Broj donatora</p>
	</div>


<div class="medium-4 columns">
<!-- brojač institucija -->
		<?php
			$don2 = $con->prepare("select COUNT(id_ins) from INSTITUCIJA;");
			$don2->execute();
			$rez2 = $don2->fetch(PDO::FETCH_NUM);	
		?>
		<h1><?php echo $rez2[0];?></h1>
		<p>Broj uključenih institucija</p>
	</div>
	
<div class="medium-4 columns">
<!-- brojač institucija -->
		<?php
			$don3 = $con->prepare("select COUNT(id_donacije) from DONACIJA;");
			$don3->execute();
			$rez3 = $don3->fetch(PDO::FETCH_NUM);	
		?>
		<h1><?php echo $rez3[0];?></h1>
		<p>Broj donacija</p>
	</div>
</div>
</div>

<div class="row treca">
<div class="medium-10 medium-centered columns">
<div class="medium-12 medium-centered columns">
<div class="medium-6 columns">
<h1 class="pitanje">Kako cijela stvar <span>funkcionira</span></h1>
</div>
<div class="medium-6 columns">
<p>Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita. Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita. Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita. Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita. Koncetrat eritrocita sa smanjenim brojem leukocita su eritrociti iz jedne doze pune krvi iz koje je odstranjen veliki dio plazme i leukocita.
</p>
</div>
</div>
</div>
</div>


<div class="row cetvrta">
<div class="medium-10 medium-centered columns">
<div class="medium-12 medium-centered columns">
<h1>Humans</h1>

<div class="medium-3 columns">
<img class="ikone" src="img/war.svg">
<h4 style="color:#eb6054;">Warrior</h4>
<p>Krvna grupa A+<br />
Oni su snažni i hrabri!</p>
</div>
<div class="medium-3 columns">
<img class="ikone" src="img/hunter.svg">
<h4 style="color:#eb6054;">Hunter</h4>
<p>Krvna grupa B+<br />
Oni su brzi i agilni!</p>
</div>
<div class="medium-3 columns">
<img class="ikone" src="img/mage.svg">
<h4 style="color:#eb6054;">Warlock</h4>
<p>Krvna grupa AB+<br />
Oni su inteligentni i mudri!</p>
</div>
<div class="medium-3 columns">
<img class="ikone" src="img/cleric.svg">
<h4 style="color:#eb6054;">Priest</h4>
<p>Krvna grupa 0+<br />
Oni su dobri i uvijek spremni pomoći!</p>
</div>
</div>
</div>
</div>

<div class="row peta">
<div class="medium-10 medium-centered columns">
<div class="medium-12 medium-centered columns">
<h1>Elves</h1>

<div class="medium-3 columns">
<img class="ikone" src="img/war2.svg">
<h4 style="color:#eb6054;">Fighter</h4>
<p>Krvna grupa A-<br />
Oni su snažni i hrabri!</p>
</div>
<div class="medium-3 columns">
<img class="ikone" src="img/hunter2.svg">
<h4 style="color:#eb6054;">Rogue</h4>
<p>Krvna grupa B-<br />
Oni su brzi i agilni!</p>
</div>
<div class="medium-3 columns">
<img class="ikone" src="img/mage2.svg">
<h4 style="color:#eb6054;">Mage</h4>
<p>Krvna grupa AB-<br />
Oni su inteligentni i mudri!</p>
</div>
<div class="medium-3 columns">
<img class="ikone" src="img/cleric2.svg">
<h4 style="color:#eb6054;">Cleric</h4>
<p>Krvna grupa 0-<br />
Oni su dobri i uvijek spremni pomoći!</p>
</div>
</div>
</div>
</div>

<div class="row sesta">

<div class="medium-10 medium-centered columns" >
<div class="medium-12 medium-centered columns">
<div class="medium-6 columns" style="text-align: center;">
<img class="telefon" src="img/telefon.svg">
</div>
<div class="medium-6 columns" style="color: white;" >
<h2 style="color: #473636;">Nismo native al' smo responsive!</h2>
<p>Tekst o tome kako postoji aplikacijica na androidu i da je baš zabavna za koristiti. <br /> Totalno je fora. Besplatna je, ali ako bi preksočili sve onda košta 500 dolara.</p>
</div>
</div>
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
