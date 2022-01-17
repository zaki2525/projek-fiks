<?php
include "koneksi.php";
$id = $_GET['id'];
$delete = mysqli_query($koneksi,"DELETE FROM tb_siswa WHERE id = $id");
if($delete){
    $message = "Nilai dan Data Siswa Berhasil Dihapus";
    echo "<script>alert('$message');document.location='../guru/dtsiswa_nilai_guru.php';</script>";
    }else{
        $message = "Nilai dan Data Siswa Gagal Dihapus, Silahkan Ulangi";
    echo "<script>alert('$message');document.location='../guru/dtsiswa_Nilai_guru.php'</script>";
    }
?>