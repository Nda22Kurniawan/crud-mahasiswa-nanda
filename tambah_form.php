<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>::Tambah Data Mahasiswa::</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    .btn {
      margin-right: 8px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="col-md-12">
      <h3 style="margin: 20px 0px 20px 0px">Tambah Data Mahasiswa</h3>
      <form method="post" action="tambah_aksi.php" class="form_horizontal">
        <div class="mb-3">
          <label for="nim" class="form-label fw-bold">NIM</label>
          <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
        </div>
        <div class="mb-3">
          <label for="nama_mahasiswa" class="form-label fw-bold">Nama Mahasiswa</label>
          <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Masukkan Nama Mahasiswa">
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin" class="form-label fw-bold">Jenis Kelamin</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Pria">
            <label class="form-check-label">
              Pria
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Wanita">
            <label class="form-check-label">
              Wanita
            </label>
          </div>
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label fw-bold">Program Studi</label>
          <select name="program_studi" class="form-select" id="">
            <option selected>--Pilih Program Studi</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label fw-bold">Keahlian</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="keahlian[]" value="Web Programming">
            <label class="form-check-label">
              Web Programming
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="keahlian[]" value="Data Mining">
            <label class="form-check-label">
              Data Mining
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="keahlian[]" value="Data Analist">
            <label class="form-check-label">
              Data Analist
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="keahlian[]" value="Cyber Security">
            <label class="form-check-label">
              Cyber Security
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="keahlian[]" value="Software Enginering">
            <label class="form-check-label">
              Software Enginering
            </label>
          </div>
        </div>
        <div class="form-group mt-4">
          <button type="reset" name="reset" class="btn btn-danger btn-space">Cancel</button>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>