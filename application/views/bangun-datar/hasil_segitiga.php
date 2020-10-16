<body class="text-center">
  <form class="form-signin" action="<?= base_url('') ?>" method="POST">
    <img class="mb-4" src="<?= base_url('assets/') ?>gambar/logo.png" alt="" width="120" height="120">
    <h1 class="h3 mb-3 font-weight-normal">Hasil Segitiga</h1>
    <hr>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label text-left">Tinggi</label>
      <div class="col-sm-8">
        <input type="text" step="any" id="name" class="form-control" value="<?= $data['tinggi'] ?> cm" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label text-left">Alas</label>
      <div class="col-sm-8">
        <input type="text" step="any" id="name" class="form-control" value="<?= $data['alas'] ?> cm" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label text-left">Sisi Kiri</label>
      <div class="col-sm-8">
        <input type="text" step="any" id="name" class="form-control" value="<?= $data['sisikanan'] ?> cm" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label text-left">Sisi Kanan</label>
      <div class="col-sm-8">
        <input type="text" step="any" id="name" class="form-control" value="<?= $data['sisikiri'] ?> cm" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label text-left">Luas</label>
      <div class="col-sm-8">
        <input type="text" step="any" id="name" class="form-control" value="<?= $data['luas'] ?> cm&sup2" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label text-left">Keliling</label>
      <div class="col-sm-8">
        <input type="text" step="any" id="name" class="form-control" value="<?= $data['keliling'] ?> cm" readonly>
      </div>
    </div>
    <hr>
    <a href="<?= base_url('user/dashboard') ?>" class="btn btn-lg btn-primary btn-block" role="button">Dashboard</a>
    <a href="<?= base_url('user') ?>" class="btn btn-lg btn-danger btn-block" role="button">Kembali</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
  </form>
</body>

</html>