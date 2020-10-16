<body class="text-center">
  <div class="form-signin">
    <img class="mb-4" src="<?= base_url('assets/') ?>gambar/logo.png" alt="" width="120" height="120">
    <h1 class="h3 mb-3 font-weight-normal">Total dan Persentase Perhitungan</h1>
    <hr>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label text-left">Total</label>
      <div class="col-sm-8">
        <input type="number" step="any" id="name" name="alas" class="form-control" value="<?= $all ?>" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label text-left">Segitiga</label>
      <div class="col-sm-8">
        <input type="text" step="any" id="name" name="alas" step="0.01" class="form-control" value="<?= $segitiga ?>%" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label text-left">Persegi</label>
      <div class="col-sm-8">
        <input type="text" step="any" id="name" name="alas" step="0.01" class="form-control" value="<?= $persegi ?>%" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label text-left">Lingkaran</label>
      <div class="col-sm-8">
        <input type="text" step="any" id="name" name="alas" step="0.01" class="form-control" value="<?= $lingkaran ?>%" readonly>
      </div>
    </div>
    <hr>
    <a href="<?= base_url('user/histori') ?>" class="btn btn-lg btn-info btn-block" role="button">Histori Perhitungan</a>
    <a href="<?= base_url('user') ?>" class="btn btn-lg btn-danger btn-block" role="button">Kembali</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
  </div>
</body>

</html>