<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];

    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    $sql = "UPDATE db_login SET password = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $hashed_password, $email);

    if ($stmt->execute()) {
        echo "Password berhasil direset.";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!-- Form Reset Password -->
<form method="post">
    Email: <input type="email" name="email" required><br>
    Password Baru: <input type="password" name="new_password" required><br>
    <button type="submit">Reset Password</button>
</form>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Lupa Password - CarTukar</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #0f2a47;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: white;
      border-radius: 15px;
      padding: 40px 30px;
      width: 380px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.3);
      text-align: center;
    }

    .logo {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .logo span {
        color: #FFD700;
    }

    h2 {
      font-size: 20px;
      margin-bottom: 30px;
      color: #222;
    }

    input[type="email"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      background-color: #e8f0fe;
	
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #1f2937;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }
    button:hover {
      background-color: #374151;
    }

    .back-link {
      margin-top: 20px;
      font-size: 14px;
    }

    .back-link a {
      color: #1f2937;
      text-decoration: none;
      font-weight: bold;
    }

    .back-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo"><span>Car</span>Tukar</div>
    <h2>Reset Kata Sandi Anda</h2>
    <form action="proses_reset.php" method="POST">
      <input type="email" name="email" placeholder="Masukkan email terdaftar" required />
      <button type="submit">Kirim Link Reset</button>
    </form>
    <div class="back-link">
      <a href="login.html">← Kembali ke Halaman Login</a>
    </div>
  </div>
</body>
</html>