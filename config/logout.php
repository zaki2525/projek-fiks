<?php 

session_start();

unset($_SESSION['stat_login']);
unset($_SESSION['username']);
unset($_SESSION['password']);

session_destroy();
echo "<script>alert('Logout Berhasi!!!');</script>";
echo "<script>location='../index.php';</script>";


?>