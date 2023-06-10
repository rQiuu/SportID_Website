<?php
include('koneksi.php');
require 'vendor/autoload.php'; // Memuat autoloader dari PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$whereClause = ""; // Variabel untuk menyimpan klausa WHERE berdasarkan bulan dan tahun

if (isset($_GET['bulan']) && isset($_GET['tahun'])) {
    $bulan = $_GET['bulan'];
    $tahun = $_GET['tahun'];
    $whereClause = " WHERE MONTH(order_mulai) = '$bulan' AND YEAR(order_mulai) = '$tahun'";
}

$sql = "SELECT * FROM booking b INNER JOIN customer c ON b.id_customer = c.id_customer INNER JOIN lapangan l ON b.id_lapangan = l.id_lapangan $whereClause";
$query = mysqli_query($connect, $sql);

$dataTable = array(); // Array untuk menyimpan data tabel

while ($data = mysqli_fetch_array($query)) {
    // Menambahkan data ke array dataTable
    $dataTable[] = array(
        'ID Booking' => $data['id_booking'],
        'Waktu Mulai' => $data['order_mulai'],
        'Waktu Selesai' => $data['order_selesai'],
        'Customer' => $data['nama'],
        'Lapangan' => $data['nama_lapangan'],
        'Bayar' => $data['bayar']
    );
}

// Membuat objek Spreadsheet baru
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Menulis judul kolom
$column = 'A';
$columns = array('ID Booking', 'Waktu Mulai', 'Waktu Selesai', 'Customer', 'Lapangan', 'Bayar');
foreach ($columns as $col) {
    $sheet->setCellValue($column . '1', $col);
    $column++;
}

// Menulis data tabel
$row = 2;
foreach ($dataTable as $data) {
    $column = 'A';
    foreach ($data as $value) {
        $sheet->setCellValue($column . $row, $value);
        $column++;
    }
    $row++;
}

// Mengatur lebar kolom otomatis
foreach (range('A', $column) as $col) {
    $sheet->getColumnDimension($col)->setAutoSize(true);
}

// Membuat file Excel
$writer = new Xlsx($spreadsheet);
$filename = 'data_transaksi_' . $bulan . '_' . $tahun . '.xlsx';

// Mengatur header untuk mengunduh file Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');

// Menulis file Excel ke output
$writer->save('php://output');
exit();
