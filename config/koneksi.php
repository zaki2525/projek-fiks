<?php 

    $koneksi = mysqli_connect('localhost', 'root', '', 'db_pwpb');

    if(!$koneksi) {
        echo "Koneksi Error: " . mysqli_connect_error();
    }

?>