<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tukar Tambah Mobil - CarTukar</title>
  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="Belibekas.css" />
</head>

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
          <a href="lokasikami.php">Contact Us</a>
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

  <!-- Login Start -->
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

  <!-- Tukar Tambah Mobil Section Start -->
  <section class="belibekas" id="belibekas">
    <h1 class="heading">Beli Mobil Bekas di <span>CARTUKAR</span></h1>
    <div class="container">
      <div class="trade-in-content">
        <div class="trade-in-text">
          <h2>Ucapkan selamat tinggal pada cara lama!</h2>
          <p>
            Membeli mobil bekas seharusnya sederhana & benar-benar bebas dari
            rasa khawatir. Dengan CARTUKAR, Anda dapat memesan dan membeli
            mobil bekas bahkan melakukan tukar tambah mobil bekas secara
            online tanpa repot karena kami yang menangani semuanya untuk Anda.
          </p>
          <ul class="benefits">
            <li>
              <i class="fas fa-car"></i> Jelajahi berbagai inventaris mobil
              bekas berkualitas kami
            </li>
            <li>
              <i class="fas fa-sync-alt fa-spin"></i>
              <!-- Rotasi terus-menerus -->
              Periksa interior & eksterior dengan tampilan 360 derajat
            </li>

            <li>
              <i class="fas fa-calculator"></i> Sesuaikan anggaran &
              pembayaran Anda dengan kalkulator pinjaman mobil kami
            </li>
          </ul>
          <a href="#" class="btn">Cek mobil berkualitas kami</a>
        </div>
        <div class="trade-in-image">
          <img src="pic/belibekas.jpg" alt="Tukar Tambah Mobil" />
        </div>
      </div>
    </div>
  </section>
  <!-- Tukar Tambah Mobil Section End -->
  <!-- Kualitas Mobil Section Start -->
  <section class="kualitas" id="kualitas">
    <h1 class="heading">Kualitas <span>Terjamin</span></h1>
    <div class="container">
      <div class="kualitas-content">
        <!-- Gambar di sebelah kiri -->
        <div class="kualitas-image">
          <img src="pic/kualitas.png" alt="Tukar Tambah Mobil" />
        </div>
        <!-- Teks di sebelah kanan -->
        <div class="kualitas-text">
          <p>
            Kami bangga dengan kualitas mobil kami. Semua mobil CARTUKAR
            Certified telah menjalani penilaian yang teliti untuk memastikan
            kelayakannya & dilengkapi dengan CARTUKAR Promise untuk memberi
            Anda ketenangan.
          </p>
          <a href="#" class="btn">Pelajari lebih lanjut</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Kualitas Mobil Section End -->

  <!-- Mengapa section start -->
  <section class="why-choose-us">
    <h1 class="heading">Bayar dengan <span>mudah</span></h1>
    <div class="container">
      <div class="benefits-grid">
        <div class="benefit-card">
          <i class="fas fa-mobile-alt"></i>
          <h3>Pembayaran Online</h3>
          <p>
            Tukar tambah atau pesan mobil bekas dengan metode pembayaran
            online kami yang aman & terjamin.
          </p>
        </div>
        <div class="benefit-card">
          <i class="fas fa-credit-card"></i>
          <h3>Kartu kredit</h3>
          <p>
            Dapatkan mobil bekas Anda dengan melakukan pembayaran melalui
            kartu kredit baik dalam jumlah penuh atau sebagian, serta untuk
            pembayaran uang muka.
          </p>
        </div>
        <div class="benefit-card">
          <i class="fas fa-hand-holding-usd"></i>
          <h3>Pinjaman Kredit</h3>
          <p>
            Konsultan kami akan membantu Anda dengan pengajuan pinjaman untuk
            mobil bekas Anda melalui lembaga penyedia keuangan kami.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Mengapa section end -->
  <!-- Kualitas Mobil Section Start -->
  <section class="mulai" id="mulai">
    <h1 class="heading">Siap Memulai?</h1>
    <div class="container">
      <div class="mulai-content">
        <!-- Tombol di bawah h1 -->
        <div class="mulai-text">
          <a href="Bekas.php" class="btn btn-primary">Beli Mobil</a>
          <a href="RegistrasiDealer.php" class="btn btn-secondary">Jual mobil anda</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Kualitas Mobil Section End -->

  <!-- footer section start -->
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
        <a href="Dealer.html">| Masuk Sebagai Dealer</a>
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
  <!-- footer section end -->
  <script>
    let menu = document.querySelector("#menu-btn");
    let navbar = document.querySelector(".navbar");

    menu.onclick = () => {
      menu.classList.toggle("fa-times");
      navbar.classList.toggle("active");
    };
    document.querySelector("#login-btn").onclick = () => {
      document
        .querySelector(".login-form-container")
        .classList.toggle("active");
    };

    document.querySelector("#close-login-form").onclick = () => {
      document
        .querySelector(".login-form-container")
        .classList.remove("active");
    };
    window.onscroll = () => {
      if (window.scrollY > 0) {
        document.querySelector(".header").classList.add("active");
      } else {
        document.querySelector(".header").classList.remove("active");
      }
      menu.classList.remove("fa-times");
      navbar.classList.remove("active");
    };
    window.onload = () => {
      if (window.scrollY > 0) {
        document.querySelector(".header").classList.add("active");
      } else {
        document.querySelector(".header").classList.remove("active");
      }
    };
  </script>
</body>

</html>