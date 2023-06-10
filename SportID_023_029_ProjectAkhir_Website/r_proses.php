<?php 
    session_start();

    include 'koneksi.php';

    $username   = $_POST['username'];
    $password   = $_POST['password'];   
    $nama    = $_POST['customer'];

    $sql        = "INSERT INTO customer VALUES('', '$username', '$password', '$nama')";
    $query    = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    
    if($query>0){
        $_SESSION['username']   = $username;
        header("location: login.php?pesan=register");
        
    }else{
        header("location: register.php?pesan=gagalregister");
    }
