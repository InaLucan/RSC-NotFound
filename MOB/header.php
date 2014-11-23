<?php include_once 'konfiguracija.php';?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crimson Quest</title>
    <link rel="stylesheet" href="<?php echo $putanja;?>css/foundation.css" />
	<link rel="stylesheet" href="css/stil.css" />
	<link href='http://fonts.googleapis.com/css?family=Alegreya:900&subset=latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:300&subset=latin-ext' rel='stylesheet' type='text/css'>
    <script src="<?php echo $putanja;?>js/vendor/modernizr.js"></script>
  </head>
  <body>
<div class="sticky">
 <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#" style="color: #eb6054;">CQ</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
    <?php if(isset($_SESSION['ulogiran'])) {?>
       <li><a href="<?php echo $putanja;?>detaljOPERATER.php?id_ope=<?php echo $_SESSION['operater'];?>"><?php echo $_SESSION['ulogiran'] ;?>  </a> </li>
     <li> <a href="<?php echo $putanja;?>odjava.php"> Odjava </a></li>
    <?php }else{ ?>
      <a data-reveal-id="login" href="#" class="button"><li>Login</li></a>
      <?php } ;?>
    </ul>
    <!-- Left Nav Section -->
    <ul class="left">
      <?php if(!isset($_SESSION['ulogiran'])) {?>
	  <li><a href="<dodajDONATOR.php"> Registriraj se! </a> </li>
	  <?php };?>
    </ul>
  </section>
</nav>
</div>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
$(document).foundation();
</script>