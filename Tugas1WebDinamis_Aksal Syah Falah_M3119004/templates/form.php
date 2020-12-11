<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <h1 class="text-center">Formulir Pendataan Mahasiswa</h1>
    <hr>
    <!-- Nama -->
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input class="form-control" name="nama" required type="text" placeholder="Paijo Subarjo" minlength="3" title="Isi sesuai dengan nama Anda. Isian tidak mengandung angka atau simbol!" pattern="(^[a-zA-Z-' ]*$)">
        <?php if($_SERVER["REQUEST_METHOD"] == "POST" && $namaErr != ""): ?>
        <small class="text-danger">
            <?php echo $namaErr; ?>
        </small>
        <?php endif; ?>
    </div>
    <!-- NIM -->
    <div class="form-group">
        <label for="NIM">NIM</label>
        <input class="form-control" name="NIM" required type="text" placeholder="M3119005" minlength="8" maxlength="8" title="Karakter pertama harus huruf kemudian diikuti angka sesuai format NIM!" pattern="^[A-Z]{1}[0-9]{7}">
        <?php if($_SERVER["REQUEST_METHOD"] == "POST" && $NIMErr != ""): ?>
        <small class="text-danger">
            <?php echo $NIMErr; ?>
        </small>
        <?php endif; ?>
    </div>
    <!-- Jenis Kelamin -->
    <div class="form-check form-check-inline mb-3">
        <input type="radio" name="gender" class="form-check-input" value="l" required>
        <label class="form-check-label mr-3" for="male">Laki-laki</label>
        <input type="radio" name="gender" class="form-check-input" value="p">
        <label class="form-check-label" for="female">Perempuan</label>
    </div>
    <?php if($_SERVER["REQUEST_METHOD"] == "POST" && $genderErr != ""): ?>
    <div class="form-group">
        <small class="text-danger">
            <?php echo $genderErr; ?>
        </small>
    </div>
    <?php endif; ?>
    <!-- Tempat Lahir -->
    <div class="form-group">
        <label for="birthloc">Kota Kelahiran</label>
        <input class="form-control" name="birthloc" required type="text" placeholder="Jakarta" minlength="4" title="Isi sesuai dengan kota kelahiran Anda." pattern="(^[a-zA-Z-' ]*$)">
        <?php if($_SERVER["REQUEST_METHOD"] == "POST" && $birthlocErr != ""): ?>
        <small class="text-danger">
            <?php echo $birthlocErr; ?>
        </small>
        <?php endif; ?>
    </div>
    <!-- Tanggal Lahir -->
    <div class="form-group">
        <label for="birthdate">Tanggal Lahir</label>
        <input type="date" name="birthdate" class="form-control" required max="2005-12-31">
        <?php if($_SERVER["REQUEST_METHOD"] == "POST" && $birthdateErr != ""): ?>
        <small class="text-danger">
            <?php echo $birthdateErr; ?>
        </small>
        <?php endif; ?>
    </div>
    <!-- Jurusan -->
    <div class="form-group">
        <label for="prodi">Program Studi</label>
        <select class="custom-select" name="prodi" required>
            <option value="te">D3 Teknik Elektro</option>
            <option value="ti">D3 Teknik Informatika</option>
            <option value="tm">D3 Teknik Mesin</option>
        </select>
        <?php if($_SERVER["REQUEST_METHOD"] == "POST" && $prodiErr != ""): ?>
        <small class="text-danger">
            <?php echo $prodiErr; ?>
        </small>
        <?php endif; ?>
    </div>
    <!-- Alamat -->
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" name="alamat" minlength="4" rows="2" placeholder="Jl. Ir. Sutami No.36, Kentingan, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126" required></textarea>
        <?php if($_SERVER["REQUEST_METHOD"] == "POST" && $alamatErr != ""): ?>
        <small class="text-danger">
            <?php echo $alamatErr; ?>
        </small>
        <?php endif; ?>
    </div>
    <!-- Phone Number -->
    <div class="form-group">
        <label for="phone">Nomor Telepon</label>
        <input type="tel" name="phone" class="form-control" maxlength="14" pattern="^[+][0-9]{13}" required placeholder="+6285647216632">
        <?php if($_SERVER["REQUEST_METHOD"] == "POST" && $phoneErr != ""): ?>
        <small class="text-danger">
            <?php echo $phoneErr; ?>
        </small>
        <?php endif; ?>
    </div>
    <!-- Email -->
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="admin@student.uns.ac.id" required>
        <?php if($_SERVER["REQUEST_METHOD"] == "POST" && $emailErr != ""): ?>
        <small class="text-danger">
            <?php echo $emailErr; ?>
        </small>
        <?php endif; ?>
    </div>
    <button class="btn btn-success" type="submit" name="submit">Submit</button>
</form>