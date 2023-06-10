<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login </title>
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
    <nav class="navbar navbar-dark sticky-top" style="margin-bottom: 40px; background-color: #E10856;">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-weight: bold;" href="home.php">HOME</a>
        </div>
    </nav>
    <div class="boxlogin">
        <div class="text-light" align="center">
            <h1 style="font-weight: bold;"> Welcome Back </h1>
            <hr width="80%">
            <br>

            <h5 style="font-family: sans; color: white;">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "failed") {
                        echo "FAILED ! Invalid Username or Password ";
                    } else if ($_GET['pesan'] == "notlogin") {
                        echo "LOGIN UNTUK AKSES !";
                    } else if ($_GET['pesan'] == "logout") {
                        echo "LOGOUT SUCCESSFUL !";
                    } else if ($_GET['pesan'] == "register") {
                        echo "REGISTER SUCCESSFUL !";
                    }
                }
                ?>
            </h5>

            <form method="POST" action="klogin.php">
                <div class="mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <br>
                <button type="submit" class="mb-2 btn btn-outline-light form-control">LOGIN</button><br>
                <p>
                    Belum Punya Akun?
                    <a href="register.php" class="text-white"> Daftar Disini</a>
                </p>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>