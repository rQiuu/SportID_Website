<?php
include 'koneksi.php';

$id_booking     = $_POST['id_booking'];
$order_mulai    = $_POST['order_mulai'];
$order_selesai  = $_POST['order_selesai'];
$id_customer    = $_POST['id_customer'];
$id_lapangan    = $_POST['id_lapangan'];
$bayar          = $_POST['bayar'];

$sql    = "INSERT INTO booking (id_booking, order_mulai, order_selesai, id_customer, id_lapangan, bayar) VALUES('$id_booking', '$order_mulai', '$order_selesai', '$id_customer', '$id_lapangan', '$bayar')";

if(mysqli_query($connect, $sql)) {
    header("location: bayar.php?id=" . $id_booking);
} else {
    $error_message = mysqli_error($connect);
    if (strpos($error_message, "Duplicate entry") !== false) {
        echo "<script>alert('FAILED! Jam yang Anda pilih telah dibooking.');</script>";
        echo "<script>window.location.href = 'home.php?pesan=failed';</script>";
    } else {
        echo "Error: " . $error_message;
    }
}
