<?php 

    include '../config/koneksi.php';
    
    $id = $_GET['id'];
    $hapus = mysqli_query( $koneksi, "DELETE FROM tb_guru WHERE id = '$id'" );

    if( $hapus )
    {
        header("Location: dtguru_admin.php");
    } else {
        echo "Error";
    }

?>