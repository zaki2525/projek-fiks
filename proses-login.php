
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