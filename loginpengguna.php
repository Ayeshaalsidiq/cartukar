<?php
session_start();
// Kalau udah login, redirect ke halaman utama
if (isset($_SESSION['user_id'])) {
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - CarTukar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
  <style>
    body {
      background: url('bgmobilmu.jpg') no-repeat center center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      font-family: sans-serif;
    }

    .login-form-container {
      background: white;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      max-width: 400px;
      width: 100%;
    }

    .login-form-container h3 {
      text-align: center;
      font-size: 24px;
      color: #1d1b41;
      margin-bottom: 1.5rem;
    }

    .box {
      width: 100%;
      padding: 12px;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .btn {
      width: 100%;
      background-color: #f9c300;
      color: #000;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      margin-bottom: 1rem;
    }

    .buttons {
      display: flex;
      gap: 1rem;
      justify-content: center;
    }

    .buttons .btn {
      width: 45%;
    }

    a {
      color: #f9c300;
      text-decoration: none;
      text-align: center;
    }

    a:hover {
      text-decoration: underline;
    }

    p {
      text-align: center;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <div class="login-form-container">
    <form action="auth.php" method="POST">
      <h3>USER LOGIN</h3>

      <?php
      // Tampilkan error kalau ada
      if (isset($_GET['error'])) {
        echo "<p style='color:red; text-align:center;'>" . htmlspecialchars($_GET['error']) . "</p>";
      }
      ?>

      <input type="email" name="email" placeholder="Email" class="box" required />
      <input type="password" name="password" placeholder="Password" class="box" required />
      <p>Forget Your Password? <a href="#">Click Here</a></p>
      <input type="submit" value="Login Now" class="btn" />
      <p>Or Login With</p>
      <div class="buttons">
        <a href="#" class="btn">Google</a>
        <a href="#" class="btn">Facebook</a>
      </div>
      <p>Don't Have An Account? <a href="RegistrasiCartukar.php">Sign Up</a></p>
    </form>
  </div>
</body>
</html>
