<?php
    $host ="localhost";//host data base
    $username ="root";//username database
    $password = "";//password database
    $db ="profile";
    $koneksi = new mysqli($host,$username,$password,$db); //membuat koneksi ke server mysql

    if ($koneksi->connect_error){
        die("koneksi ke database gagal");
    }
?> 