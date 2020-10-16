<body class="text-center">
  <div class="form-signin">
    <img class="mb-4" src="<?= base_url('assets/') ?>gambar/logo.png" alt="" width="120" height="120">
    <h1 class="h3 mb-3 font-weight-normal">Histori Perhitungan</h1>
    <hr>
    <iframe src="<?= base_url('./data/history.txt') ?>" height="400" width="300" title="Iframe Example"></iframe>
    <hr>
    <a href="<?= base_url('user') ?>" class="btn btn-lg btn-danger btn-block" role="button">Kembali</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
  </div>
</body>

</html>