<?php 
    session_start();

    include 'koneksi.php';

    $id   = $_GET['id'];

    $sql        = "DELETE FROM booking WHERE id_booking = '$id';";
    $query    = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    
    if($query>0){
        header("location: home.php");
        
    }else{
        echo "Cencel Order Gagal.";
    }