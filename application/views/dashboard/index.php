<body class="text-center">
  <div class="form-signin">
    <img class="mb-4" src="<?= base_url('assets/') ?>gambar/logo.png" alt="" width="120" height="120">
    <h1 class="h3 mb-3 font-weight-normal">Menghitung<br>Bangun Datar</h1>
    <hr>
    <a href="<?= base_url('user/segitiga') ?>" class="btn btn-lg btn-info btn-block" role="button">Segitiga</a>
    <a href="<?= base_url('user/persegi') ?>" class="btn btn-lg btn-info btn-block" role="button">Persegi</a>
    <a href="<?= base_url('user/lingkaran') ?>" class="btn btn-lg btn-info btn-block" role="button">Lingkaran</a>
    <?php if ($all != null) : ?>
      <a href="<?= base_url('user/dashboard') ?>" class="btn btn-lg btn-primary btn-block" role="button">Dashboard</a>
    <?php endif; ?>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
  </div>
</body>

</html>