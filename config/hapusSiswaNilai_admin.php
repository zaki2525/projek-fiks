<?php
include "koneksi.php";
$id = $_GET['id'];
$delete = mysqli_query($koneksi,"DELETE FROM tb_siswa WHERE id = $id");
if($delete){
    header("Location: ../admin/dtsiswa_nilai_admin.php");
    }else{
        $message = "Nilai dan Data Siswa Gagal Dihapus, Silahkan Ulangi";
    echo "<script>alert('$message');document.location='../admin/dtsiswa_Nilai_admin.php'</script>";
    }
?>