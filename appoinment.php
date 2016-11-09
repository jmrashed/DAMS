<?php
include("header.php");
?>
<?php include 'leftbar.php'; ?>
<div class="col-md-6">
       <?php
   if(isset($_GET['message'])){
       echo $_GET['message'];
   }
   ?>
  <?php include 'love_appoinment.php'; ?>
</div>




<?php include 'rightbar.php'; ?>
<?php
include("footer.php");
?>			



		