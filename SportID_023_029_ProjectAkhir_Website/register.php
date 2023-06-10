<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Register </title>
	<link rel="stylesheet" href="css.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		body {
			background-image: url("foto/bglogin.jpeg");
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			background-attachment: fixed;
		}
	</style>
</head>

<body>
	<div class="boxre">
		<div class="text-light" align="center">
			<h1 style="font-weight: bold;"> Welcome Back </h1>
			<hr width="80%">
			<br>

			<form method="POST" action="r_proses.php">
				<div class="mb-3">
					<input type="text" class="form-control" name="username" placeholder="Username" class="login" required>
				</div>
				<div class="mb-3">
					<input type="text" class="form-control" name="customer" placeholder="Nama" class="login" required>
				</div>
				<div class="mb-3">
					<input type="password" class="form-control" name="password" placeholder="Password" class="login" required>
				</div>

				<br>
				<button type="submit" class="mb-2 btn btn-outline-light form-control">REGISTER</button><br>
				<p>
					Sudah Punya Akun?
					<a href="login.php" class="text-white"> Login Disini</a>
				</p>

			</form>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>