<?php
// Panggil file header.php
include 'pages/header.php';
?>

<link rel="stylesheet" href="ourstory.css" />

<body>
  <!-- Header Section Start -->
  <header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="index.php" class="logo"><span>Car</span>Tukar </a>
    <!-- Nav Bar Start -->
    <nav class="navbar">
      <a href="Bekas.php">Buy Car</a>
      <a href="#">Sell Car</a>
      <a href="FAQ.php">FAQ</a>
      <div class="dropdown">
        <a href="#" id="about-link">About CarTukar</a>
        <i class="fas fa-chevron-down"></i>
        <!-- Font Awesome arrow icon -->
        <div class="dropdown-menu">
          <a href="ourstory.php">About Us</a>
          <a href="lokasikami.php">Our Location</a>
          <a href="contactus.php">Contact Us</a>
          <a href="News.php">News</a>
        </div>
      </div>
      <div class="dropdown">
        <a href="#" id="about-link">Related</a>
        <i class="fas fa-chevron-down"></i>
        <!-- Font Awesome arrow icon -->
        <div class="dropdown-menu">
          <a href="Jual.php">Sell Car</a>
          <a href="Tukar.php">Trade-in</a>
          <a href="Belibekas.php">used cars</a>
          <a href="Certified.php">Certified</a>
        </div>
      </div>
    </nav>
    <div id="login-btn">
      <button class="btn">Login</button>
      <i class="far fa-user"></i>
    </div>
  </header>
  <!-- Nav Bar End -->
  <!-- Header Section End -->

  <!-- Login Form -->
  <div class="login-form-container">
    <span class="fas fa-times" id="close-login-form"></span>
    <form action="">
      <h3>User Login</h3>
      <input type="email" placeholder="Email" class="box" />
      <input type="password" placeholder="Password" class="box" />
      <p>Forget your password? <a href="#">Click here</a></p>
      <input type="submit" value="login now" class="btn" />
      <p>or login with</p>
      <div class="buttons">
        <a href="#" class="btn">google</a>
        <a href="#" class="btn">facebook</a>
      </div>
      <p>
        Don't have an account? <a href="RegistrasiCartukar.html">Sign up</a>
      </p>
    </form>
  </div>
  <!-- Login End -->

  <!-- Main Content Section Start -->
  <!-- Main Content Section Start -->
  <section class="our-story">
    <h1 class="heading">Our <span>Story</span></h1>
    <div class="story-content">
      <div class="text-content">
        <h3>Siapa Kami?</h3>
        <p>
          CARTUKAR adalah platform jual beli mobil bekas online terbesar di
          Asia Tenggara yang saat ini hadir di Malaysia, Indonesia, Thailand
          dan Singapura. Perusahaan ini memiliki misi untuk membawa industri
          mobil bekas ke era digital dengan membangun dan mengangkat
          pengalaman dalam menjual dan membeli mobil.
        </p>
        <p>
          CARTUKAR menyediakan solusi terlengkap untuk pembeli dan penjual
          mobil bekas, mulai dari inspeksi mobil, mutasi kepemilikan hingga
          pembiayaan, menjanjikan pelayanan yang Terpercaya, Mudah dan Cepat.
        </p>
      </div>
      <div class="logo-content">
        <h3><span>CAR</span>TUKAR.</h3>
        <!-- Ganti dengan nama file logo Anda -->
      </div>
    </div>
  </section>

  <section class="visi-misi">
    <div class="content">
      <h3>Visi Kami</h3>
      <p>
        Memajukan industri otomotif di Asia Tenggara dalam ekosistem mobil
        bekas
      </p>
    </div>
    <div class="content">
      <h3>Misi</h3>
      <p>
        Untuk memberikan kenyamanan kepada pelanggan kami melalui seluruh
        siklus hidup pengalaman kepemilikan kendaraan bekas mereka
      </p>
    </div>
  </section>

  <section class="nilai-nilai">
    <h1 class="heading"><span>Nilai-Nilai </span>CarTukar</h1>
    <div class="nilai-container">
      <div class="nilai-item">
        <h3>Pelanggan yang Utama</h3>
        <p>
          Mempertimbangkan pelanggan dalam setiap keputusan yang diambil, dan
          selalu mengutamakan nilai bagi pelanggan daripada hasil jangka
          pendek
        </p>
      </div>
      <div class="nilai-item">
        <h3>Yang Terbaik Kemarin Hanya Jadi Dasar Hari Ini</h3>
        <p>
          Kami menekankan pada konsistensi dan perbaikan yang sistematis, yang
          dapat diulang dan terakumulasi.
        </p>
      </div>
      <div class="nilai-item">
        <h3>Lakukan Lebih Banyak dengan Sumber yang Terbatas</h3>
        <p>
          Kami memulai dengan sumber daya yang sangat terbatas, dan kami
          bangga dapat memberikan hasil yang luar biasa melalui pelaksanaan
          cerdas dan inovasi yang gigih.
        </p>
      </div>
      <div class="nilai-item">
        <h3>Berpikir besar, mulai dari yang kecil</h3>
        <p>
          Kami tidak takut mengambil keputusan yang berani dan memiliki ambisi
          yang besar, selalu mengambil langkah yang penuh perhitungan.
          bereksperimen dengan terperinci untuk mengoptimalkan investasi
        </p>
      </div>
      <div class="nilai-item">
        <h3>Selalu Rendah Hati</h3>
        <p>
          Memimpin dengan sikap rendah hati, penuh pertimbangan, syukur, dan
          bersikap baik kepada karyawan, pelanggan, serta masyarakat secara
          luas.
        </p>
      </div>
      <div class="nilai-item">
        <h3>Jadilah Pemilik</h3>
        <p>
          Bertanggung jawab penuh dan bangga dengan peran dalam pekerjaan,
          proaktif untuk melakukan lebih dari yang seharusnya untuk
          kepentingan perusahaan
        </p>
      </div>
    </div>
  </section>
  <!-- footer section end -->
  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>our branches</h3>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Bandung</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Jakarta</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Bali</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Yogyakarta</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Bekasi</a>
      </div>
      <div class="box">
        <h3>Quick links</h3>
        <a href="#"><i class="fas fa-arrow-right"></i>Home</a>
        <a href="#"><i class="fas fa-arrow-right"></i>Vehicles</a>
        <a href="#"><i class="fas fa-arrow-right"></i>Services</a>
        <a href="#"><i class="fas fa-arrow-right"></i>Featured</a>
        <a href="#"><i class="fas fa-arrow-right"></i>Reviews</a>
        <a href="#"><i class="fas fa-arrow-right"></i>Contact</a>
      </div>
      <div class="box">
        <h3>Call us</h3>
        <a href="#"><i class="fas fa-phone"></i>+123-456-789</a>
        <a href="#"><i class="fas fa-phone"></i>+576-565-666</a>
        <a href="#"><i class="fas fa-envelope"></i>cartukar@gmail.com</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Bandung, Indonesia - 480001</a>
      </div>
      <div class="box">
        <h3>Our social media</h3>
        <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
        <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
        <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
      </div>
    </div>

    <div class="download-apps">
      <h3>Download Our App</h3>
      <div class="app-icons">
        <div class="app-icon">
          <a href="#" target="_blank">
            <img src="app store.png" alt="Download on the App Store" />
          </a>
        </div>
        <div class="app-icon">
          <a href="#" target="_blank">
            <img src="play store.png" alt="Get it on Google Play" />
          </a>
        </div>
      </div>

      <p class="shopping-info">
        Lebih banyak cara untuk berbelanja: Temukan CARTUKAR Center di dekat
        Anda. Atau hubungi +576 565 666
        <a href="file:///D:/TELKOM/Tugas/UI/CarTukar/Dealer.html">| Masuk Sebagai Dealer</a>
      </p>
      <p class="copyright">
        © 2024-2027 PT CAR TUKAR INDONESIA (010101010101) Dilindungi oleh hak
        cipta | all rights reserved
      </p>

      <div class="footer-links">
        <a href="#">Kebijakan Privasi</a> |
        <a href="#">Syarat Penggunaan</a>
      </div>
    </div>
  </section>
</body>

</html>