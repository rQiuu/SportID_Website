<?php
session_start();
if (empty($_SESSION['username'])) {
	header("location: login.php?message=belum_login");
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

</head>

<body style="background-color: #1D1D1D;">
	<nav class="navbar navbar-dark sticky-top" style="background-color: #E10856;">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="home.php">HOME</a>
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

	<div class="container">
		<div class="row text-light " style="margin-top: 50px;">
			<?php
			include 'koneksi.php';
			$id = $_GET['id'];
			$sql = "SELECT * FROM booking b INNER JOIN customer c ON b.id_customer = c.id_customer INNER JOIN lapangan l ON b.id_lapangan = l.id_lapangan WHERE b.id_booking = '$id';";
			$query = mysqli_query($connect, $sql);
			while ($data = mysqli_fetch_array($query)) {
			?>
				<div class="col-sm-6 card bg-dark" style="text-align: left;">
					<div style="background-size: cover; background-repeat: no-repeat; background-position: top;">
						<img src="foto/aa1.png" class="w-100" style="border-radius: 10px; margin-top: 10px; margin-bottom: 10px;" alt="">
					</div>
					<div>
						<p>id booking = <?= $data['id_booking']; ?></p>
						<p><?= $data['nama']; ?></p><br>
						<h3><?= $data['nama_lapangan']; ?></h3>
						<p><?= $data['alamat']; ?></p>

					</div>

				</div>
				<div class="col-sm-1 text-light " style="text-align: left;">
				</div>
				<div class="col-sm-5 text-light card bg-dark" style="text-align: left;">
					<br>
					<p><?= $data['order_mulai']; ?></p>
					<p><?= $data['order_selesai']; ?></p>
					<br>
					<div class="d-flex">
						<p style="margin-right: 300px;">Total Pembayaran </p>
						<p>RP <?= $data['bayar']; ?></p>
					</div>
					<br><br><br><br>
					<div class="d-flex">
						<a href="berhasil.php">
							<button style="margin-top: 20px; margin-left: 25px; background-color: #E10856; width:200px; border-radius:50px; color:white;font-weight: bold;">
								ORDER
							</button>
						</a>
						<a href="cencel.php?id=<?= $data['id_booking']; ?>">
							<button style="margin-top: 20px; margin-left: 70px; background-color: #E10856; width:200px; border-radius:50px; color:white;font-weight: bold;">
								CENCEL
							</button>
						</a>
					</div>

				</div>
			<?php } ?>
		</div>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>