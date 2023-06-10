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
	<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />
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

			<div class="container mt-4">
				<div class="row">
					<div class="col-lg-4">
						<div class="alert  text-light" style="background-color: #E10856; font-size:xx-large; font-weight: bold; font-family: initial;">
							<h4>Order Disini</h4>
						</div>
						<div class="card bg-dark">
							<?php
							function generateRandomID($length = 8)
							{
								$characters = '0123456789';
								$charactersLength = strlen($characters);
								$id_pelanggan = '';
								for ($i = 0; $i < $length; $i++) {
									$id_pelanggan .= $characters[rand(0, $charactersLength - 1)];
								}
								return $id_pelanggan;
							}

							$id_pelanggan = generateRandomID(5);

							if (!empty($_SESSION['username'])) { // Periksa jika username tidak kosong
								$username = $_SESSION['username'];

								$sql = "SELECT * FROM customer WHERE username = '$username'";
								$query = mysqli_query($connect, $sql);

								while ($row = mysqli_fetch_array($query)) {


							?>
									<h1 class="text-light">Hallo <?= $row['nama'] ?></h1>
									<form action="order_proses.php" method="POST">
										<input type="hidden" name="id_booking" value="<?= $id_pelanggan ?>" class="input">
										<input type="hidden" name="id_customer" value="<?= $row['id_customer'] ?>" class="input">
										<input type="hidden" name="id_lapangan" value="<?= $data['id_lapangan'] ?>" class="input">
										<div class="card-body">
											<div class="form-group">
												<select name="bayar" class="form-select bg-dark text-light" aria-label="Default select example">
													<option value="">Lama Waktu Bermain</option>
													<option value="<?= 1 * 35000; ?>">1 Hour</option>
													<option value="<?= 2 * 35000; ?>">2 Hour</option>
													<option value="<?= 3 * 35000; ?>">3 Hour</option>
												</select>
											</div>
											<div class="form-group mt-4 bg-dark text-light">
												<div class="form-label">Waktu Mulai</div>
												<input type="datetime-local" class="form-control bg-dark text-light" name="order_mulai" id="order_mulai">
											</div>
											<div class="form-group mt-4 bg-dark text-light">
												<div class="form-label">Waktu Selesai</div>
												<input type="datetime-local" class="form-control bg-dark text-light" name="order_selesai" id="order_selesai">
											</div>
											<div class="form-group mt-4">
												<button type="submit" class="btn btn-success">Simpan</button>
											</div>
										</div>
									</form>
						<?php
								}
							}
						}
						?>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="alert  text-light" style="background-color: #E10856; font-size:xx-large; font-weight: bold; font-family: initial;">
							<h4>Jadwal Pemesanan</h4>
						</div>
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

							$sql = "SELECT * FROM booking b INNER JOIN customer c ON b.id_customer = c.id_customer INNER JOIN lapangan l ON b.id_lapangan = l.id_lapangan WHERE l.id_lapangan = '$id';";
							$query	= mysqli_query($connect, $sql);

							while ($data = mysqli_fetch_array($query)) {
							?>
								<tr>
									<td><?= $data['id_booking']; ?></td>
									<td><?= $data['order_mulai']; ?></td>
									<td><?= $data['order_selesai']; ?></td>
									<td><?= $data['nama']; ?></td>
									<td><?= $data['nama_lapangan']; ?></td>
									<td><?= $data['bayar']; ?></td>
								</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var calendarEl = document.getElementById('calendar');
			var calendar = new FullCalendar.Calendar(calendarEl, {
				initialView: 'dayGridMonth',
				events: [],
				selectOverlap: function(event) {
					return event.rendering === 'background';
				}
			});

			calendar.render();
		});
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>