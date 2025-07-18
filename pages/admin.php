<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$halaman = "pages/$page.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cartukar Admin</title>
  <link rel="stylesheet" href="../asset/js/admin.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
  <aside class="sidebar">
    <h2>Cartukar</h2>
    <nav>
      <a href="?page=dashboard" class="nav-link <?= $page == 'dashboard' ? 'active' : '' ?>">Dashboard</a>
      <a href="?page=mobil" class="nav-link <?= $page == 'mobil' ? 'active' : '' ?>">Mobil</a>
      <a href="?page=pengguna" class="nav-link <?= $page == 'pengguna' ? 'active' : '' ?>">Pengguna</a>
      <a href="?page=transaksi" class="nav-link <?= $page == 'transaksi' ? 'active' : '' ?>">Transaksi</a>
      <a href="?page=komplain" class="nav-link <?= $page == 'komplain' ? 'active' : '' ?>">Komplain</a>
      <a href="?page=pengaturan" class="nav-link <?= $page == 'pengaturan' ? 'active' : '' ?>">Pengaturan</a>
    </nav>
  </aside>

  <main class="main">
    <header class="header">
      <h1 id="page-title"><?= ucfirst($page); ?></h1>
      <div class="admin-profile">👤 Admin</div>
    </header>

    <section id="content">
      <?php
      // Ini adalah bagian penting yang memuat konten dari folder 'pages'
      if (file_exists($halaman)) {
        include $halaman;
      } else {
        echo "<p>Halaman tidak ditemukan!</p>";
      }
      ?>
    </section>

    <footer class="footer">&copy; 2025 Cartukar Admin Panel</footer>
  </main>
</body>

</html>