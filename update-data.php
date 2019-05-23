<?php
include "koneksi.php";

if(isset($_POST ['submit'])){
    $id_user =$_POST["id"];
    $nama =$_POST["nama"];
    $role = $_POST["role"];
    $availiability =$_POST["availability"];
    $age =$_POST["age"];
    $location =$_POST["location"];
    $experience =$_POST["years_experience"];
    $email =$_POST["email"];
    
    $sql ="UPDATE user SET name ='$nama',role='$role',
    availability ='$availiability',age='$age',location='$location',
    years_experience ='$experience', email ='$email'
    WHERE ='$id_user'";

    if($koneksi->query($sql) == TRUE){
        echo "Update Data Berhasil";
    } else {
        echo "Update data Gagal";
    }
}
?>