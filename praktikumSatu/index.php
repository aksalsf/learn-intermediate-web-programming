<!DOCTYPE html>
<html lang="id-ID" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulir Pendaftaran Study Club</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="col-lg-6 col-md-10 col-12 mx-auto mt-5 mb-5 card p-md-5 bg-light shadow-sm">
        <h1 class="font-weight-bold text-center">Formulir Pendaftaran Study Club</h1>
        <hr>
        <form action="result.php" method="post">
          <div class="form-group">
            <label for="emailUser" class="font-weight-bold">Surel</label>
            <input type="email" class="form-control" name="emailUser" placeholder="namakamu@gmail.com" required>
          </div>
          <div class="form-group">
            <label for="namaUser" class="font-weight-bold">Nama</label>
            <input type="text" class="form-control" name="namaUser" placeholder="Paijo Fajri" required>
          </div>
          <div class="form-group">
            <label for="lahirUser" class="font-weight-bold">Tanggal Lahir</label>
            <input type="date" class="form-control" name="lahirUser" required>
          </div>
          <div class="form-group">
            <label for="passwordUser" class="font-weight-bold">Password</label>
            <input type="password" class="form-control" name="passwordUser" required>
          </div>
          <div class="form-group">
            <p class="font-weight-bold">Jenis Kelamin</p>
            <div class="form-check form-check-inline">
              <input type="radio" name="genderUser" value="cowok" class="form-check-input" required>
              <label for="genderUser" class="form-check-label">Cowok</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="genderUser" value="cewek" class="form-check-input" required>
              <label for="genderUser" class="form-check-label">Cewek</label>
            </div>
          </div>
          <div class="form-group">
            <p class="font-weight-bold">Pilihan Study Club</p>
            <div class="form-check form-check-inline">
              <input type="checkbox" name="choiceUser[]" value="desain grafis" class="form-check-input">
              <label for="choiceUser" class="form-check-label text-capitalize">desain grafis</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" name="choiceUser[]" value="programming" class="form-check-input">
              <label for="choiceUser" class="form-check-label text-capitalize">programming</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" name="choiceUser[]" value="videografi" class="form-check-input">
              <label for="choiceUser" class="form-check-label text-capitalize">videografi</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" name="choiceUser[]" value="fotografi" class="form-check-input">
              <label for="choiceUser" class="form-check-label text-capitalize">fotografi</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" name="choiceUser[]" value="pengembangan website" class="form-check-input">
              <label for="choiceUser" class="form-check-label text-capitalize">pengembangan website</label>
            </div>
          </div>
          <div class="form-group col-md-4 p-0">
            <label for="angkatan" class="font-weight-bold">Angkatan</label>
            <select name="angkatan" class="form-control">
              <option selected value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
            </select>
          </div>
          <input type="hidden" name="persetujuanUser" value="yes">
          <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </body>
</html>
