<?php
session_start();
// 1. Tentukan halaman default jika tidak ada parameter di URL, yaitu 'home'.
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// 2. Buat path lengkap ke file konten yang ada di dalam folder 'pages'.
$halaman_konten = "../pages/$page.php";

// 3. Panggil file header.php
include '../views/header.php';

// 4. Cek jika file kontennya ada, lalu masukkan. Jika tidak, tampilkan halaman 404.
if (file_exists($halaman_konten)) {
    include $halaman_konten;
} else {
    echo "<section style='padding:10rem 2rem; text-align:center;'>
              <h1 class='heading'>404 - Halaman Tidak Ditemukan</h1>
              <p style='font-size:1.7rem;'>Maaf, halaman yang kamu cari tidak ada.</p>
              <a href='index.php' class='btn' style='margin-top:2rem;'>Kembali ke Home</a>
            </section>";
}

// 5. Panggil file footer.php
include 'footer.php';
