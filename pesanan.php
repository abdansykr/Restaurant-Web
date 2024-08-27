<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

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
        <a class="navbar-brand text-white" href="index.php"><strong>Rumah</strong> Makan Enak</a>
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
      <div class="judul-pesanan mt-5\">
        <h3 class="text-center font-weight-bold">DATA PESANAN</h3>
      </div>
      <table class="table table-bordered" id="example">
        <thead class="thead-light">
          <tr>
            <th scope="col">No. Meja</th>
            <th scope="col">Nama Pesanan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>01</td>
            <td>Bakso</td>
            <td>2</td>
            <td>2020-01-03</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">Hapus Data</a>
            </td>
          </tr>
          <tr>
            <td>01</td>
            <td>Nasi Goreng</td>
            <td>2</td>
            <td>2020-04-20</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">Hapus Data</a>
            </td>
          </tr>
          <tr>
            <td>01</td>
            <td>Jus Mangga</td>
            <td>2</td>
            <td>2020-02-15</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">Hapus Data</a>
            </td>
          </tr>
          <tr>
            <td>01</td>
            <td>Teh </td>
            <td>2</td>
            <td>2020-02-24</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">Hapus Data</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>