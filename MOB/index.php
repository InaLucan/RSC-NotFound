<?php 
ini_set('display_errors',1); 
error_reporting(E_ALL); 
include_once 'header.php';?>
  <div class="uvod" >
 <div class="row">
 <div class="small-12 medium-10 medium-centered columns glavna">

 <div class="small-12 medium-5 columns" >
 <img src="<?php echo $putanja;?>img/drawing.svg">


 </div>
 </div>
 </div>
 <div class="row druga small-10 columns" style="text-align: center;">
 <form action="<?php echo $putanja;?>prijava.php" method="POST">
	<input type="text" name="email_don" value="imatkovis@gmail.com"/>
	<input type="password" name="lozinka_don" value="ivan"/>
	<input type="submit" class="button" value="Login" />
</div>
 </form>
 </div>


<?php include_once 'footer.php';?>
    
    <script src="<?php echo $putanja;?>js/vendor/jquery.js"></script>
    <script src="<?php echo $putanja;?>js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
