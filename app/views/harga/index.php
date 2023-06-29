<div class="table-harga table-responsive card" style="margin-top:25px; width:60%; margin-right:auto; margin-left:auto;">
  <p class="text-center" style="padding-top:10px; font-size:40px">Daftar Harga Layanan SHOESIT</p>
  <table class="table table-dark table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Treatment</th>
        <!-- <th scope="col">Description</th> -->
        <th scope="col">Price</th>
        <th scope="col">Penasaran?</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['hrg'] as $hrg) : ?>
        <tr>
          <td><?= $hrg['layanan']; ?></td>
          <!-- <td><?= $hrg['ket']; ?></td> -->
          <td>Rp. <?= '' ?><?= $hrg['harga']; ?></td>
          <td><a class="badge badge-primary" style="padding: 10px;" href="<?php echo BASEURL; ?>/harga/detail/<?php echo $hrg['id']; ?>">Sini!</a></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>