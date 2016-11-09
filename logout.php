<?php
session_start();
session_destroy();
unset($_SESSION['duser']);
unset($_SESSION['puser']);
header("location:index.php");
?>