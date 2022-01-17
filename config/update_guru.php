<?php
include 'koneksi.php';
$id = $_POST['id'];
$nip=$_POST['nip'];
$nama=$_POST['nama'];
$mapel=$_POST['mapel'];
$domisili=$_POST['domisili'];
$umur=$_POST['umur'];
$jk=$_POST['jk'];
$update = mysqli_query($koneksi,"UPDATE tb_guru SET nip='$nip',nama='$nama',mapel ='$mapel',domisili='$domisili',umur='$umur',jk='$jk' WHERE id='$id'");
if($update){
    header("Location: ../admin/dtguru_admin.php");
    }else{
    $message = "Nilai dan Data Siswa Gagal Diedit, Silahkan Ulangi";
    echo "<script>alert('$message');document.location='../admin/editSiswaNilai_admin.php'</script>";
    }
?>