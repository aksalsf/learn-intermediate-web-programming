<!DOCTYPE html>
<html lang="id-ID" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Hitung Gaji - M3119004</title>
  </head>
  <body>
    <main class="col-md-6 mx-auto mt-5 mb-5">
      <header>
        <h1 class="font-weight-bold text-center">Hitung Gaji</h1>
        <hr>
      </header>
      <form action="gaji.php" method="POST">
        <div class="form-group">
          <label for="nama"> <strong>Nama</strong> </label>
          <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="golongan"> <strong>Golongan</strong> </label>
          <select name="golongan" class="form-control" required>
            <option value="1">Golongan 1</option>
            <option value="2">Golongan 2</option>
            <option value="3">Golongan 3</option>
          </select>
        </div>
        <div class="form-group">
          <label for="lama_kerja"> <strong>Lama Kerja (Tahun)</strong> </label>
          <input type="number" name="lama_kerja" class="form-control" min="0" required>
        </div>
        <div class="form-group">
          <label for="status"> <strong>Status</strong> </label>
          <select name="status" class="form-control" required>
            <option value="sudah">Sudah Menikah</option>
            <option value="belum">Belum Menikah</option>
          </select>
        </div>
        <div class="form-group">
          <label for="jumlah_anak"> <strong>Jumlah Anak</strong> </label>
          <input type="number" name="jumlah_anak" class="form-control" min="0" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </main>
  </body>
</html>
