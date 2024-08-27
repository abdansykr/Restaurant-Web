<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>RUMAH MAKAN ENAK</title>
  </head>
  <body>
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">RUMAH MAKAN ENAK</span></h1>
          <hr>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="index.php"><strong>Rumah</strong> Makan Enak </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_menu.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan.php">PESANAN</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>   
      <div class="container">
        <div class="judul text-center mt-5">
          <h3 class="font-weight-bold">RUMAH MAKAN ENAK</h3>
          <h5>PUNDONG, BANTUL, YOGYAKARTA
          <br>Buka Jam <strong>10:00 - 18:00</strong></h5>
        </div>
        <div class="row mb-5 mt-5 ">
          <div class="col-md-6 d-flex justify-content-end">
            <div class="card bg-dark text-white border-light">
              <img src="images/menu2.webp" class="card-img" alt="Lihat Daftar Menu">
              <div class="card-img-overlay mt-5 text-center">
               <a href="daftar_menu.php" class="btn btn-primary">LIHAT DAFTAR MENU</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-start">
            <div class="card bg-dark text-white border-light">
              <img src="images/menu3.webp" class="card-img" alt="Lihat Pesanan">
              <div class="card-img-overlay mt-5 text-center">
               <a href="pesanan.php" class="btn btn-primary">LIHAT PESANAN</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      $filecounter="counter.txt";
      $fl=fopen($filecounter, "r+");
      $hit=fread($fl,filesize($filecounter));

      echo ("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=30000FF><tr>");
      echo ("<td width=250 valign=middle align=center>");
      echo ("<font face=verdana size=2 color=#FF0000><b>");
      echo ("Anda pengunjung yang ke:");
      echo ($hit);
      echo ("</b></font>");
      echo ("</td>");
      echo ("</tr></table>");
      fclose($fl);
      $fl=fopen($filecounter,"w+");
      $hit=$hit+1;
      fwrite($fl,$hit,strlen($hit));
      fclose($fl);
      ?>
  </body>
</html>