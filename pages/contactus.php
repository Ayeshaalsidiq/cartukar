!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - CarTukar</title>
  <link rel="stylesheet" href="contactus.css" />
  <!-- Link to your CSS file -->
  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
</head>

<body>
  <!-- Header Section Start -->
  <header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="indek.php" class="logo"><span>Car</span>Tukar </a>
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

  <!-- contact us section start -->
  <section class="contact-us">
    <h1 class="heading"><span>Contact</span> Us</h1>
    <!-- Kotak Horizontal 1: Pertanyaan Umum / Feedback -->
    <div class="horizontal-boxes">
      <div class="box">
        <i class="fas fa-question-circle"></i>
        <h3>Pertanyaan Umum / Feedback</h3>
        <div class="divider"></div>
        <!-- Garis pemisah -->
        <p><strong>(022) 522 4138</strong></p>
        <p>08.30 - 17.30 WIB (Senin - Minggu)</p>
        <p><a href="mailto:info@carsome.id">info@cartukar.id</a></p>
      </div>
      <div class="box">
        <i class="fas fa-comments"></i>
        <h3>Chat dengan Kami</h3>
        <div class="divider"></div>
        <!-- Garis pemisah -->
        <div class="qr-content">
          <img src="pic/wa-my.webp" alt="QR Code WhatsApp" class="qr-code" />
          <div class="qr-text">
            <p><strong>WhatsApp ID</strong></p>
            <p>
              <a href="https://wa.me/622150202030" target="_blank">+62 2150202030</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Kotak Vertikal 1 dan 2 -->
    <div class="vertical-boxes">
      <div class="box">
        <i class="fas fa-briefcase"></i>
        <h3>Peluang</h3>
        <div class="divider"></div>
        <!-- Garis pemisah -->

        <p><strong>Kemitraan Dealer</strong></p>
        <p><a href="mailto:info@cartukar.id">info@cartukar.id</a></p>
        <p><strong>Kolaborasi/Brand Partnership</strong></p>
        <p>
          <a href="mailto:partnership@cartukar.id">partnership@cartukar.id</a>
        </p>
      </div>
      <div class="box">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Alamat Kantor Pusat</h3>
        <div class="divider"></div>
        <!-- Garis pemisah -->
        <p><strong>Kantor Pusat CARTUKAR</strong></p>
        <p>
          Jl. Telekomunikasi No.1, Sukapura, Kec. Dayeuhkolot, Kabupaten
          Bandung, Jawa Barat 40257
        </p>
        <p><strong>(022) 522 4138</strong></p>
      </div>
    </div>

    <!-- Kotak Memanjang di Bawah -->
    <div class="long-box">
      <i class="fas fa-headset"></i>
      <h3>Layanan Pengaduan Konsumen</h3>
      <div class="divider"></div>
      <!-- Garis pemisah -->
      <p><strong>PT Car Tukar Indonesia</strong></p>
      <p>No. Telp: <strong>(022) 522 4138</strong></p>
      <p>Email: <a href="mailto:info@cartukar.id">info@cartukar.id</a></p>
      <p>
        Direktorat Jenderal Perlindungan Konsumen dan Tertib Niaga Kementerian
        Perdagangan Republik Indonesia
      </p>
      <p>
        WhatsApp:
        <a href="https://wa.me/6285311111010" target="_blank">+62 853 1111 1010</a>
      </p>
    </div>
  </section>
  <!-- contact us section end -->

  <!-- footer section start -->
  <section class="footer">
    <div class="boxes-container">
      <div class="boxes">
        <h3>our branches</h3>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Bandung</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Jakarta</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Bali</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Yogyakarta</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Bekasi</a>
      </div>
      <div class="boxes">
        <h3>Quick links</h3>
        <a href="#"><i class="fas fa-arrow-right"></i>Home</a>
        <a href="#"><i class="fas fa-arrow-right"></i>Vehicles</a>
        <a href="#"><i class="fas fa-arrow-right"></i>Services</a>
        <a href="#"><i class="fas fa-arrow-right"></i>Featured</a>
        <a href="#"><i class="fas fa-arrow-right"></i>Reviews</a>
        <a href="#"><i class="fas fa-arrow-right"></i>Contact</a>
      </div>
      <div class="boxes">
        <h3>Call us</h3>
        <a href="#"><i class="fas fa-phone"></i>+123-456-789</a>
        <a href="#"><i class="fas fa-phone"></i>+576-565-666</a>
        <a href="#"><i class="fas fa-envelope"></i>cartukar@gmail.com</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Bandung, Indonesia - 480001</a>
      </div>
      <div class="boxes">
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