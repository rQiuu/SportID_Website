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
  <nav class="navbar navbar-dark sticky-top" style="margin-bottom: 40px; background-color: #E10856;">
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

  <div class="container text-center">
    <div class="row">
      <div class="col-sm-5" style="text-align: left;">
        <h3 style="font-weight: bold; color: white;">Sport ID</h3>
        <h5 style="line-height: 2; color: white;">
          Sport ID website membantu atlet dalam memberikan semua informasi tentang olahraga yang ada minati, silahkan lihat informasi pada page berikut ini. Sport ID menyediakan pencarian tempat berlatih berbagai cabang olah raga.
        </h5>
      </div>
      <div class="col-sm-1">
      </div>
      <div class="col-sm-6" style="margin-bottom: 50px;">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="foto/futsal1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Futsal</h5>
                <p>Lapangan Futsal</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="foto/futsal1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="foto/futsal1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

    <h5 style="margin-bottom: 20px; font-weight: bold; text-align: left; color: white;">
      Event >
    </h5>
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true" style="margin-bottom: 50px;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="foto/futsal1.jpg" class="d-block w-100" height="300px" style="border-radius: 15px;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://ik.trn.asia/uploads/2023/02/1675818373836.jpeg?tr=w-609.98,h-344.64" class="d-block w-100" height="300px" style="border-radius: 15px;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="foto/event2.jpg" class="d-block w-100" height="300px" style="border-radius: 15px;" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <h5 style="margin-bottom: 20px; font-weight: bold; text-align: left; color: white; margin-bottom: 50px;">
      Lapangan Futsal >
    </h5>

    <div class="col-3 d-flex">
      <?php
      include('koneksi.php');

      $sql  = "SELECT * FROM lapangan WHERE kategori = 'futsal'";

      $query  = mysqli_query($connect, $sql);

      while ($data = mysqli_fetch_array($query)) {
      ?>

        <div>
          <a href="futsal.php?id=<?= $data['id_lapangan']; ?>"><button class="btn" type="button" style="margin-left: 10px; margin-right: 10px; margin-bottom: 50px; background-color: #E10856; width:400px; padding: 10px; border-radius: 10px; align-items:center;">
              <img src="foto/<?= $data['image']; ?>" alt="" style="height: 150px;">
              <div style="text-align: left; margin-left: 25px; margin-top: 25px;">
                <h5 class="card-title" style="text-align: center;"><?= $data['nama_lapangan']; ?></h5>
              </div>
        </div>
        </button></a>
      <?php } ?>
    </div>


    <h5 style="margin-bottom: 20px; font-weight: bold; text-align: left; color: white; margin-bottom: 50px;">
      Lapangan Basket >
    </h5>

    <div class="col-3 d-flex">
      <?php
      include('koneksi.php');

      $sql  = "SELECT * FROM lapangan WHERE kategori = 'basket'";

      $query  = mysqli_query($connect, $sql);

      while ($data = mysqli_fetch_array($query)) {
      ?>

        <div>
          <a href="futsal.php?id=<?= $data['id_lapangan']; ?>"><button class="btn" type="button" style="margin-left: 10px; margin-right: 10px; margin-bottom: 50px; background-color: #E10856; width:400px; padding: 10px; border-radius: 10px; align-items:center;">
              <img src="foto/<?= $data['image']; ?>" alt="" style="height: 150px;">
              <div style="text-align: left; margin-left: 25px; margin-top: 25px;">
                <h5 class="card-title" style="text-align: center;"><?= $data['nama_lapangan']; ?></h5>
              </div>
        </div>
        </button></a>
      <?php } ?>
    </div>

    <h5 style="margin-bottom: 20px; font-weight: bold; text-align: left; color: white; margin-bottom: 50px;">
      Lapangan Badminton >
    </h5>

    <div class="col-3 d-flex">
      <?php
      include('koneksi.php');

      $sql  = "SELECT * FROM lapangan WHERE kategori = 'bultang'";

      $query  = mysqli_query($connect, $sql);

      while ($data = mysqli_fetch_array($query)) {
      ?>

        <div>
          <a href="futsal.php?id=<?= $data['id_lapangan']; ?>"><button class="btn" type="button" style="margin-left: 10px; margin-right: 10px; margin-bottom: 50px; background-color: #E10856; width:400px; padding: 10px; border-radius: 10px; align-items:center;">
              <img src="foto/<?= $data['image']; ?>" alt="" style="height: 150px;">
              <div style="text-align: left; margin-left: 25px; margin-top: 25px;">
                <h5 class="card-title" style="text-align: center;"><?= $data['nama_lapangan']; ?></h5>
              </div>
        </div>
        </button></a>
      <?php } ?>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>