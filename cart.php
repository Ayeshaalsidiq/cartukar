<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_user = $_POST['id_user'];
    $id_produk = $_POST['id_produk'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO keranjang (id_user, id_produk, jumlah) VALUES ('$id_user', '$id_produk', '$jumlah')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Mobil berhasil ditambahkan ke keranjang!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Cart - CarTukar</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
      text-align: center;
    }
    header {
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    h1 {
      margin-top: 50px;
      font-size: 36px;
    }
    .empty-cart {
      margin-top: 30px;
    }
    .empty-cart img {
      width: 200px;
      opacity: 0.6;
    }
    .explore-btn {
      margin-top: 25px;
      padding: 12px 25px;
      font-size: 16px;
      background-color: #f1c40f;
      border: none;
      color: #000;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s ease;
    }
    .explore-btn:hover {
      background-color: #e1b70c;
    }
  </style>
</head>
<body>

<header>
  <h2>🛒 Your Cart</h2>
</header>

<main>
  <h1>Keranjang Kamu Kosong</h1>

  <div class="empty-cart">
    <img src="https://cdn-icons-png.flaticon.com/512/1170/1170678.png" alt="Empty Cart">
    <p style="margin-top: 10px; font-size: 18px;">Ayo cari mobil impian kamu sekarang!</p>
  </div>

  <a href="Bekas.php">
    <button class="explore-btn">Explore Cars</button>
  </a>
</main>

</body>
</html>
