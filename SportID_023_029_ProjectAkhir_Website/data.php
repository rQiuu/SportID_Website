<?php
session_start();
if (empty($_SESSION['username'])) {
	header("location: ladmin.php?message=belum_login");
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Login </title>
	<link rel="stylesheet" href="css.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />
</head>

<body style="background-color: #1D1D1D;">
	<nav class="navbar navbar-dark sticky-top" style="background-color: #E10856;">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand">Data Transaksi</a>
			<a href="logout.php"><button class="btn btn-outline-warning text-light" style="font-weight: bold;" type="submit">Logout</button></a>
			<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header" style="background-color: #E10856;">
					<h5 class=" offcanvas-title" id="offcanvasNavbarLabel" style="color: white;">Sport ID</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body bg-dark">
					<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" style="color: white;" href="home.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" style="color: white;" href="ladmin.php">Admin</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" style="color: white;" href="calender.php">Calnder Booking</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<center>
		<div style="width: 1000px;">
			<div style="background-size: cover; background-repeat: no-repeat; background-position: top;">
				<img src="aa1.png" class="w-100" alt="">
			</div>
			<div class="alert text-light" style="background-color: #E10856; font-size:xx-large; font-weight: bold; font-family: initial;">
				<h4>Jadwal Pemesanan</h4>
			</div>
			<div class="container text-center">
				<div class="row justify-content-center">
					<div class="col">
						<form method="GET" action="">
							<div class="row align-items-center">
								<div class="col-auto">
									<select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 180px;" name="bulan" id="bulan">
										<option selected>BULAN</option>
										<option value="01">Januari</option>
										<option value="02">Februari</option>
										<option value="03">Maret</option>
										<option value="04">April</option>
										<option value="05">Mei</option>
										<option value="06">Juni</option>
										<option value="07">Juli</option>
										<option value="08">Agustus</option>
										<option value="09">September</option>
										<option value="10">Oktober</option>
										<option value="11">November</option>
										<option value="12">Desember</option>
									</select>
								</div>
								<div class="col-auto">
									<input type="text" name="tahun" id="tahun" maxlength="4" class="form-control" style="width: 180px;" placeholder="TAHUN">
								</div>
								<div class="col-auto">
									<input type="submit" value="Cari" style="width: 100px;" class="btn btn-light">
								</div>
								<div class="col">
									<a href="?all=true" style="width: 100px;" class="btn btn-warning">All Data</a>
									<form method="POST" action="export.php">
									</form>
								</div>
								<div class="col-auto">
									<form method="POST" action="export.php">
										<input type="hidden" name="dataBooking" value="<?= htmlspecialchars(json_encode($dataBooking)); ?>">
										<input type="submit" class="btn btn-success" value="Download All Data">
									</form>
								</div>

							</div>
						</form>
					</div>
				</div>
			</div>
			<br>
			<br>

			<table class="table text-light" align="center">
				<tr>
					<th>ID Booking</th>
					<th>Waktu Mulai</th>
					<th>Waktu Selesai</th>
					<th>Customer</th>
					<th>Lapangan</th>
					<th>Bayar</th>
				</tr>

				<?php
				include('koneksi.php');

				$whereClause = ""; // Variabel untuk menyimpan klausa WHERE berdasarkan bulan dan tahun

				if (isset($_GET['bulan']) && isset($_GET['tahun'])) {
					$bulan = $_GET['bulan'];
					$tahun = $_GET['tahun'];
					$whereClause = " WHERE MONTH(order_mulai) = '$bulan' AND YEAR(order_mulai) = '$tahun'";
				}

				if (isset($_GET['all'])) {
					$whereClause = ""; // Menghapus klausa WHERE jika tombol "All Data" diklik
				}

				$sql = "SELECT * FROM booking b INNER JOIN customer c ON b.id_customer = c.id_customer INNER JOIN lapangan l ON b.id_lapangan = l.id_lapangan $whereClause";
				$query = mysqli_query($connect, $sql);

				$totalBayar = 0; // Variabel untuk menyimpan jumlah total bayar

				// Menyimpan semua data booking ke dalam array
				$dataBooking = mysqli_fetch_all($query, MYSQLI_ASSOC);

				foreach ($dataBooking as $data) {
					$totalBayar += $data['bayar']; // Menambahkan nilai bayar ke totalBayar
				?>
					<tr>
						<td><?= $data['id_booking']; ?></td>
						<td><?= $data['order_mulai']; ?></td>
						<td><?= $data['order_selesai']; ?></td>
						<td><?= $data['nama']; ?></td>
						<td><?= $data['nama_lapangan']; ?></td>
						<td>Rp <?= $data['bayar']; ?></td>
					</tr>
				<?php } ?>

				<!-- Menampilkan total bayar di bawah tabel -->
				<tr>
					<td colspan="1" style="text-align: right; font-weight: bold;">Total Bayar:</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>Rp <?= $totalBayar; ?></td>
				</tr>
			</table>
			<br>
			<br>
			<form method="POST" action="export.php">
				<input type="hidden" name="bulan" value="<?= isset($_GET['bulan']) ? $_GET['bulan'] : ''; ?>">
				<input type="hidden" name="tahun" value="<?= isset($_GET['tahun']) ? $_GET['tahun'] : ''; ?>">
				<button type="submit" class="btn btn-primary">Download Transaksi</button>
			</form>



		</div>
	</center>


	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>