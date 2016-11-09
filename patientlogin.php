<?php
include("header.php");
   if (isset($_SESSION["puserid"])) {
        header("Location:index.php");
    } else {
        logout();
    }
    
?>
<?php include 'leftbar.php'; ?>
<div class="col-md-6">
 

    <?php include 'lovepl.php'; ?>

</div>




<?php include 'rightbar.php'; ?>
<?php
include("footer.php");
?>			



		