<body class="text-center">
  <form class="form-signin" action="<?= base_url('user/hitungPersegi') ?>" method="POST">
    <img class="mb-4" src="<?= base_url('assets/') ?>gambar/logo.png" alt="" width="120" height="120">
    <h1 class="h3 mb-3 font-weight-normal">Persegi</h1>
    <input type="number" step="any" id="email" name="panjang" class="form-control" placeholder="Panjang" required>
    <input type="number" step="any" id="password" name="lebar" class="form-control" placeholder="Lebar" required>
    <hr>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Hitung</button>
    <a href="<?= base_url('user') ?>" class="btn btn-lg btn-danger btn-block" role="button">Kembali</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
  </form>
</body>

</html>