<?php
include 'koneksi.php';

$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$pwpb=$_POST['pwpb'];
$pbo=$_POST['pbo'];
$bd=$_POST['bd'];
$ppl=$_POST['ppl'];
$kelas=$_POST['kelas'];
$submit = mysqli_query($koneksi,"INSERT INTO tb_siswa VALUES('','$nisn','$nama','$pwpb','$pbo','$bd','$ppl','$kelas')");
// Alert
if($submit){
    header("Location: ../admin/dtsiswa_nilai_admin.php");
}else{
    $message = "Nilai dan Data Siswa Gagal Disimpan, Silahkan Ulangi";
echo "<script>alert('$message');document.location='../admin/tambahSiswaNilai_admin.php'</script>";
}
?>