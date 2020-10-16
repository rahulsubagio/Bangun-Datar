<body class="text-center">

  <form class="form-signin" action="<?= base_url('user/hitungSegitiga') ?>" method="POST">
    <img class="mb-4" src="<?= base_url('assets/') ?>gambar/logo.png" alt="" width="120" height="120">
    <h1 class="h3 mb-3 font-weight-normal">Segitiga</h1>
    <div class="form-row px-1">
      <input type="number" step="any" id="name" name="tinggi" class="form-control" placeholder="Tinggi" required>
      <input type="number" step="any" id="name" name="alas" class="form-control" placeholder="Alas" required>
      <input type="number" step="any" id="password" name="sisikiri" class="form-control col-md-6" placeholder="Sisi Kiri" required>
      <input type="number" step="any" id="password1" name="sisikanan" class="form-control col-md-6" placeholder="Sisi Kanan" required>
    </div>
    <hr>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Hitung</button>
    <a href="<?= base_url('user') ?>" class="btn btn-lg btn-danger btn-block" role="button">Kembali</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
  </form>
</body>

</html>