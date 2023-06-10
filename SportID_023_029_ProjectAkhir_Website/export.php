<?php
include('koneksi.php');

// Mendapatkan data dari database
$whereClause = ""; // Variabel untuk menyimpan klausa WHERE berdasarkan bulan dan tahun

if (isset($_POST['bulan']) && isset($_POST['tahun'])) {
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$whereClause = " WHERE MONTH(order_mulai) = '$bulan' AND YEAR(order_mulai) = '$tahun'";
}

$sql = "SELECT * FROM booking b INNER JOIN customer c ON b.id_customer = c.id_customer INNER JOIN lapangan l ON b.id_lapangan = l.id_lapangan $whereClause";
$query = mysqli_query($connect, $sql);

// Header untuk mengatur file sebagai file CSV yang dapat diunduh
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="data_booking.csv"');

// Membuka file output dengan mode tulis
$output = fopen('php://output', 'w');

// Menulis header kolom ke file CSV
$header = array('ID Booking', 'Waktu Mulai', 'Waktu Selesai', 'Customer', 'Lapangan', 'Bayar');
fputcsv($output, $header);

// Menulis data ke file CSV
while ($data = mysqli_fetch_array($query)) {
	$row = array(
		$data['id_booking'],
		$data['order_mulai'],
		$data['order_selesai'],
		$data['nama'],
		$data['nama_lapangan'],
		$data['bayar']
	);
	fputcsv($output, $row);
}

// Menutup file output
fclose($output);
