<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  <title>Halaman <?= $data['judul']; ?> </title>

  <style>
    .container-iconproduk {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 15vh;
      margin-bottom: 90px;
    }

    .container-produk {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .circle {
      width: 95px;
      height: 95px;
      border-radius: 50%;
      background-color: #007bff;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 48px;
      margin-left: 20px;
      transition: transform 0.5s ease-in-out;
    }

    .circle:hover {
      transform: scale(1.1);
    }

    .hidden-card .card {
      border: none !important;
      box-shadow: none !important;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container" style="margin-left: 10px;">
      <a class="navbar-brand" href="<?= BASEURL; ?>">SHOESIT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link <?php echo $_SERVER['REQUEST_URI'] == '/shoes/public/' ? 'active' : ''; ?>" href="<?= BASEURL; ?>">Home <span class="sr-only"></span></a>
          <a class="nav-item nav-link <?php echo $_SERVER['REQUEST_URI'] == '/shoes/public/produk' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/produk">Produk</a>
          <a class="nav-item nav-link <?php echo $_SERVER['REQUEST_URI'] == '/shoes/public/about' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/about">About</a>
          <a class="nav-item nav-link <?php echo $_SERVER['REQUEST_URI'] == '/shoes/public/harga' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/harga">Harga</a>
        </div>
        <div class="navbar-nav" style="margin-left:80%;">
          <button type="button" class="btn btn-light" data-toggle="modal" data-target="#loginModal">
            Login
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="FormLogin">
            <!-- Tambahkan elemen-elemen form yang diperlukan di sini -->
            <div class="form-group">
              <label for="loginMail">Email:</label>
              <input type="text" class="form-control" id="loginMail" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
              <label for="loginPassword">Passowrd:</label>
              <input type="password" class="form-control" id="loginPassword" placeholder="Masukkan Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <p class="mt-2">Belum punya akun? <a href="#"> Daftar Disini!</a> </p>
          </form>
        </div>
      </div>
    </div>
  </div>