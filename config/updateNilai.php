<?php
include 'koneksi.php';
$id = $_POST['id'];
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$pwpb=$_POST['pwpb'];
$pbo=$_POST['pbo'];
$bd=$_POST['bd'];
$ppl=$_POST['ppl'];
$kelas=$_POST['kelas'];
$update = mysqli_query($koneksi,"UPDATE tb_siswa SET nisn='$nisn',nama='$nama',pwpb ='$pwpb',pbo='$pbo',bd='$bd',ppl='$ppl',kelas='$kelas' WHERE id='$id'");
if($update){
    $message = "Nilai dan Data Siswa Berhasil Diedit";
    echo "<script>alert('$message');document.location='../guru/dtsiswa_nilai_guru.php';</script>";
    }else{
    $message = "Nilai dan Data Siswa Gagal Diedit, Silahkan Ulangi";
    echo "<script>alert('$message');document.location='../guru/editSiswaNilai_guru.php'</script>";
    }
?>