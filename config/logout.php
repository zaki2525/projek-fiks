<?php 

session_start();

unset($_SESSION['stat_login']);
unset($_SESSION['username']);
unset($_SESSION['password']);

session_destroy();
echo "<script>location='../index.php';</script>";


?>