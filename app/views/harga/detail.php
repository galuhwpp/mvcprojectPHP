<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $data['hrg']['layanan']; ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['hrg']['harga']; ?></h6>
          <p class="card-text"><?php echo $data['hrg']['ket']; ?></p>
          <a href="<?php echo BASEURL; ?>/harga" class="card-link">Kembali</a>
          <a href="#" class="card-link" id="showFormBtn">Order?</a>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card hidden-card">
        <div class="card-body">
          <form id="hiddenForm" style="display: none;" action="<?php echo BASEURL; ?>/harga/order" method="post">
            <!-- Tambahkan elemen-elemen form yang diperlukan di sini -->
            <div class="form-group">
              <label for="nama">Nama:</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email">
            </div>
            <div class="form-group">
              <label for="tlpn">Nomor Telepon:</label>
              <input type="text" class="form-control" id="tlpn" placeholder="Masukkan nomor telepon" name="notlp">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat:</label>
              <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat pengiriman" name="alamat>
            </div>
            <button type="submit" class="btn btn-primary">Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>