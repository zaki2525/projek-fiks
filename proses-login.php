
<?php
include 'config/koneksi.php'; 
session_start();
    if (isset($_POST['login'])) {
    

   $username = $_POST['username'];
   $password = $_POST['password'];

   $ceklogin = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
   $count = mysqli_num_rows($ceklogin);
   if ($count > 0) {
    $cek = mysqli_fetch_assoc($ceklogin);
    
    
    if ($cek['role']=="admin") {
 
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "admin";
    header('Location: admin/hal_admin.php');      
    } else if($cek['role']=="guru"){

    $_SESSION['username'] = $username;
    $_SESSION['role'] = "guru";
    header('location: guru/hal_guru.php');       
     } else {
    echo "<script>alert('Username Dan Password Anda Salah');</script>";
 }  
    
  }
}

 ?>


 
 <?php include 'config/koneksi.php'; session_start();
if(!isset($_SESSION['stat_login']) and !isset($_SESSION['username']) and !isset($_SESSION['password'])){
	#die("anda belum login silahkan login terlebih dahulu silahkan klik <a href='../index.php'>DI SINI</a> untuk login");
} else {
	echo "<p>login berhasil, selamat datang ".$_SESSION['username']."</p><br>";
	echo "<a href='../logout.php'><button type='submit' name='logout'>logout</button></a></td><br>";
}

if($_SESSION['level'] == ""){
	header('location:../index.php');
}

?>