<?php
$servername = "localhost";
$username = "root";  // Ganti dengan username database
$password = "";  // Ganti dengan password database
$dbname = "db_cartukar";  // Ganti dengan nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $dealerName = $_POST['dealer-name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password']; // Lo bisa hash ini nanti

  // INSERT ke database (ganti `dealer` sesuai nama tabel lo)
  $sql = "INSERT INTO dealer (nama_dealer, alamat, telepon, email, password)
          VALUES ('$dealerName', '$address', '$phone', '$email', '$password')";

  if ($conn->query($sql) === TRUE) {
      echo "<script>
        alert('Registrasi berhasil!');
        window.location.href = 'loginpenjual.php';
      </script>";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi Dealer Mobil</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="RegistrasiDealer.css" />
  </head>
  <body>
    <div class="form-container">
      <h2>Registrasi Dealer Mobil</h2>
      <form>
        <div class="input-grid">
          <div class="input-group">
            <i class="fas fa-building"></i>
            <label for="dealer-name">Nama Dealer</label>
            <input
              type="text"
              id="dealer-name"
              placeholder="Masukkan nama dealer"
              required
            />
          </div>

          <div class="input-group">
            <i class="fas fa-map-marker-alt"></i>
            <label for="address">Alamat Dealer</label>
            <input
              type="text"
              id="address"
              placeholder="Masukkan alamat dealer"
              required
            />
          </div>

          <div class="input-group">
            <i class="fas fa-phone"></i>
            <label for="phone">Nomor Telepon</label>
            <input
              type="tel"
              id="phone"
              placeholder="Masukkan nomor telepon"
              required
            />
          </div>
          <div class="input-group">
            <i class="fas fa-envelope"></i>
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              placeholder="Masukkan email"
              required
            />
          </div>

          <div class="input-group">
            <i class="fas fa-lock"></i>
            <label for="password">Kata Sandi</label>
            <input
              type="password"
              id="password"
              placeholder="Masukkan kata sandi"
              required
            />
          </div>

          <div class="input-group">
            <i class="fas fa-lock"></i>
            <label for="email ">Konfirmasi Kata Sandi</label>
            <input
              type="password"
              id="confirm-password"
              placeholder="Konfirmasi kata sandi"
              required
            />
          </div>
        </div>
        <button type="submit">Daftar</button>

<div class="separator">
  <span>or</span>
</div>

<div class="google-button">
  <i class="fab fa-google"></i>
  <span>Sign in Google</span>
</div>

<div class="login-link">
  Sudah punya akun? <a href="#">Masuk di sini</a>
</div>
</form>
</div>
 </body>
</html>
