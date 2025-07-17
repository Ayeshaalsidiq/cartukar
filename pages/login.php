<section class="login-register-section">
    <div class="form-container">
        <div class="form-tabs">
            <button class="tab-btn active" data-form="login">Masuk</button>
            <button class="tab-btn" data-form="register">Daftar</button>
        </div>

        <form id="login-form" class="form-box active" action="../proses_login.php" method="POST">
            <h2>Selamat Datang Kembali</h2>
            <div class="input-group">
                <label for="login-email">Email</label>
                <input type="email" id="login-email" name="email" placeholder="Masukkan alamat email Anda" required>
            </div>
            <div class="input-group">
                <label for="login-password">Password</label>
                <input type="password" id="login-password" name="password" placeholder="Masukkan password Anda" required>
            </div>
            <div class="form-options">
                <a href="#" class="forgot-password">Lupa Password?</a>
            </div>
            <button type="submit" class="btn">Masuk</button>
        </form>

        <form id="register-form" class="form-box" action="../proses_registrasi.php" method="POST">
            <h2>Buat Akun Baru</h2>

            <div class="input-group">
                <label for="register-name">Nama Lengkap</label>
                <input type="text" id="register-name" name="nama_lengkap" placeholder="Masukkan nama lengkap Anda" required>
            </div>

            <div class="input-group">
                <label for="register-username">Username</label>
                <input type="text" id="register-username" name="username" placeholder="Buat username unik" required>
            </div>

            <div class="input-group">
                <label for="register-email">Email</label>
                <input type="email" id="register-email" name="email" placeholder="Masukkan alamat email Anda" required>
            </div>

            <div class="input-group">
                <label for="register-dob">Tanggal Lahir</label>
                <input type="date" id="register-dob" name="tanggal_lahir" required>
            </div>

            <div class="input-group">
                <label for="register-address">Alamat</label>
                <textarea id="register-address" name="alamat" placeholder="Masukkan alamat lengkap Anda" rows="3" required></textarea>
            </div>

            <div class="input-group">
                <label for="register-password">Password</label>
                <input type="password" id="register-password" name="password" placeholder="Buat password baru" required>
            </div>

            <button type="submit" class="btn">Daftar</button>
        </form>
    </div>

</section>