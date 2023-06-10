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

	<div style="background-size: cover; background-repeat: no-repeat; background-position: top;">
		<img src="foto/aa1.png" class="w-100" alt="">
	</div>

	<div class="container ">
		<div class="row">
			<div class="col-sm-5" style="text-align: left;">
				<?php
				include 'koneksi.php';
				$id = $_GET['id'];
				$sql	= "SELECT * FROM lapangan WHERE id_lapangan = '$id'";
				$query	= mysqli_query($connect, $sql);
				while ($data = mysqli_fetch_array($query)) {
				?>
					<div>
						<div class="row" style="margin-top: -200px;">
							<div class="col-4">
								<img src="foto/<?= $data['image']; ?>" alt="" style="height: 300px;">
							</div>
							<div class="col-8">
								<div style="text-align: left; margin-left: 100px; margin-top: 25px; ">
									<h5 class="card-title" style="font-size:xx-large; font-weight: bold; font-family: initial; color: white;"><?= $data['nama_lapangan']; ?></h5>
									<br>
									<h5 class="card-title" style="font-size:medium; font-family: initial; color: white;"><?= $data['alamat']; ?></h5>
									<a href="order.php?id=<?= $data['id_lapangan']; ?>"><button style="margin-top: 20px; background-color: #E10856; width:200px; border-radius:50px; color:white;font-weight: bold;">
											ORDER NOW
										</button></a>
								</div>
							</div>
						</div>
					</div>
			</div>
			<h style="margin-top: 25px; font-size:large; font-family: initial; color: white;"><?= $data['deskripsi']; ?></h>
			<h style="margin-top: 25px; font-size:large; font-family: initial; color: white;"><?= $data['fasilitas']; ?></h>
		<?php } ?>
		</div>
	</div>



		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>