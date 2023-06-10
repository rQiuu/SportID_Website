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
	<div class="boxberhasil text-light" style="text-align: center; margin-top: 100px;">
		<img src="foto/berhasil.png" style="border-radius: 10px; margin: 10px; width: 300px;" alt="">
		<p>Transaksi Berhasil</p>
		<a href="home.php" style="    color: aliceblue; text-decoration: auto;"> Back to Menu</a>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>