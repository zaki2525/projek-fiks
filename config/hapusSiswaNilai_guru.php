<?php
include "koneksi.php";
$id = $_GET['id'];
$delete = mysqli_query($koneksi,"DELETE FROM tb_siswa WHERE id = $id");
if($delete){
    header("Location: ../guru/dtsiswa_nilai_guru.php");
    }else{
        $message = "Nilai dan Data Siswa Gagal Dihapus, Silahkan Ulangi";
    echo "<script>alert('$message');document.location='../guru/dtsiswa_Nilai_guru.php'</script>";
    }
?>