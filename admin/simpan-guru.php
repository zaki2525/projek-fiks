<?php 

include '../config/koneksi.php';

if( isset( $_POST['submit']) )
{
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];
    $domisili = $_POST['domisili'];
    $umur = $_POST['umur'];
    $jk = $_POST['jk'];

    $sql = "INSERT INTO `tb_guru` (`id`, `nip`, `nama`, `mapel`, `domisili`, `umur`, `jk`) VALUES (NULL, '$nip', '$nama', '$mapel', '$domisili', '$umur', '$jk')";

    $query = mysqli_query($koneksi, $sql);

    if($query) {
        header('Location: dtguru_admin.php');
    } else {
        echo "ERRORRR";
    }
}

?>