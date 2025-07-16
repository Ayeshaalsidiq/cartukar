<?php
// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Koneksi ke database
    $host = "localhost";
    $user = "root";  // Username default XAMPP
    $pass = "";      // Kosongkan jika tidak ada password di XAMPP
    $db   = "db_cartukar"; // Nama database yang benar

    // Koneksi ke MySQL
    $conn = mysqli_connect($host, $user, $pass, $db);

    // Cek koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Ambil data dari form
    $nama = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

    // Query untuk menyimpan data ke tabel registrasi_db
    $sql = "INSERT INTO registrasi_db (nama_lengkap, nama_pengguna, email, kata_sandi)
            VALUES ('$nama', '$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        $pesan = "Registrasi berhasil!";
    } else {
        $pesan = "Error: " . mysqli_error($conn);
    }

    // Tutup koneksi
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Registrasi</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <style>
  /* Global Styles */
body {
  font-family: "Poppins", sans-serif;
  background: linear-gradient(to right, #0a2540, #1a365d),
    url("https://via.placeholder.com/1920x1080") no-repeat center center/cover;
  background-blend-mode: multiply;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.form-container {
  background-color: rgba(255, 255, 255, 0.9);
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
  padding: 40px;
  width: 400px;
  text-align: center;
}

.form-container h2 {
  text-align: center;
  color: #333;
  margin-bottom: 30px;
  font-size: 28px;
  font-weight: bold;
}

.form-container label {
  font-size: 14px;
  color: #555;
  margin-bottom: 10px;
  display: block;
  text-align: left;
}
.form-container .input-group {
  position: relative;
  margin-bottom: 20px;
}

.form-container .input-group i {
  position: absolute;
  left: 10px;
  top: 70%;
  transform: translateY(-50%);
  color: #555;
  font-size: 16px;
}

.form-container .input-group input {
  width: 90%;
  padding: 12px 12px 12px 40px;
  border: 1px solid #ddd;
  border-radius: 8px;
  font-size: 14px;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-container .input-group input:focus {
  border-color: #fdcf33;
  outline: none;
  box-shadow: 0 0 8px rgba(253, 207, 51, 1);
}

.form-container button {
  background-color: #0a2540;
  color: #ffffff;
  padding: 14px;
  border: none;
  border-radius: 8px;
  width: 100%;
  cursor: pointer;
  font-size: 16px;
  font-weight: 500;
  transition: background-color 0.3s ease, transform 0.2s ease;
}
.form-container button:disabled {
  background-color: #ccc;
  cursor: not-allowed;
  transform: none;
}

.form-container button:hover:not(:disabled) {
  background-color: #0a2540;
  color: #fdcf33;
  transform: translateY(-2px);
}

/* Styling untuk Tombol Google */
.form-container .google-button {
  background-color: #ffffff;
  color: #757575;
  border: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-top: 20px;
  padding: 12px;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s ease, border-color 0.3s ease;
}

.form-container .google-button:hover {
  background-color: #f5f5f5;
  border-color: #bbb;
}

.form-container .google-button i {
  color: #fdcf33; /* Warna ikon Google */
}

.form-container .login-link {
  margin-top: 20px;
  font-size: 14px;
  color: #555;
}
.form-container .login-link a {
  color: #0a2540;
  text-decoration: none;
  font-weight: 500;
}

.form-container .login-link a:hover {
  text-decoration: underline;
}

  </style>
</head>
<body>
  <div class="form-container">
    <h2>Registrasi</h2>
    <?php if (isset($pesan)) echo "<div class='message'>$pesan</div>"; ?>
    <form method="POST" action="">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <label for="name">Nama Lengkap</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required />
      </div>

      <div class="input-group">
        <i class="fas fa-user-circle"></i>
        <label for="username">Nama Pengguna</label>
        <input type="text" id="username" name="username" placeholder="Masukkan nama pengguna" required />
      </div>

      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email" required />
      </div>

      <div class="input-group">
        <i class="fas fa-lock"></i>
        <label for="password">Kata Sandi</label>
        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required />
      </div>
      <button type="submit">Daftar</button>

<div class="google-button">
  <i class="fab fa-google"></i>
  <span>Sign in with Google</span>
</div>

<div class="login-link">
  Sudah punya akun? <a href="loginpengguna">Masuk di sini</a>
</div>
</form>
</div>
</body>
</html>