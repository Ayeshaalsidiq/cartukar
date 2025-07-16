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
  <link rel="stylesheet" href="Tukar.css" />
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

  <!-- Tukar Tambah Mobil Section Start -->
  <section class="trade-in" id="trade-in">
    <h1 class="heading"><span>Tukar Tambah</span> Mobil Anda</h1>
    <div class="container">
      <div class="trade-in-content">
        <div class="trade-in-text">
          <h2>Dapatkan Nilai Terbaik untuk Mobil Lama Anda</h2>
          <p>
            Tukar mobil lama Anda dengan mobil baru impian Anda. Proses cepat,
            transparan, dan tanpa ribet!
          </p>
          <ul class="benefits">
            <li>
              <i class="fas fa-check-circle"></i> Penilaian mobil instan dan
              akurat
            </li>
            <li>
              <i class="fas fa-check-circle"></i> Proses tukar tambah mudah
              dan cepat
            </li>
            <li>
              <i class="fas fa-check-circle"></i> Dapatkan mobil baru dengan
              harga terbaik
            </li>
            <li>
              <i class="fas fa-check-circle"></i> Layanan profesional dan
              terpercaya
            </li>
          </ul>
          <a href="#" class="btn">Mulai Sekarang</a>
        </div>
        <div class="trade-in-image">
          <img src="pic/tukartambah.jpg" alt="Tukar Tambah Mobil" />
        </div>
      </div>
    </div>
  </section>
  <!-- Tukar Tambah Mobil Section End -->

  <!-- Kalkulator Tukar Tambah Section Start -->
  <section class="calculator" id="calculator">
    <h1 class="heading"><span>Kalkulator</span> Tukar Tambah</h1>
    <div class="calculator-container">
      <form class="calculator-form">
        <div class="form-group">
          <label for="car-brand">Merek Mobil:</label>
          <input
            type="text"
            id="car-brand"
            placeholder="Contoh: Toyota"
            required />
        </div>
        <div class="form-group">
          <label for="car-model">Model Mobil:</label>
          <input
            type="text"
            id="car-model"
            placeholder="Contoh: Avanza"
            required />
        </div>
        <div class="form-group">
          <label for="car-year">Tahun Mobil:</label>
          <input
            type="number"
            id="car-year"
            placeholder="Contoh: 2018"
            required />
        </div>
        <div class="form-group">
          <label for="car-condition">Kondisi Mobil:</label>
          <select id="car-condition" required>
            <option value="baik">Baik</option>
            <option value="sedang">Sedang</option>
            <option value="buruk">Buruk</option>
          </select>
        </div>
        <button type="submit" class="btn">Hitung Nilai Tukar Tambah</button>
      </form>
      <div class="calculator-result">
        <h3>Estimasi Nilai Tukar Tambah:</h3>
        <p id="result-value">Rp 0</p>
      </div>
    </div>
  </section>
  <!-- Kalkulator Tukar Tambah Section End -->

  <!-- Testimoni Pelanggan Section Start -->
  <section class="testimonials" id="testimonials">
    <h1 class="heading"><span>Apa Kata</span> Pelanggan Kami?</h1>
    <div class="testimonial-container">
      <div class="testimonial-card">
        <div class="testimonial-content">
          <p>
            "Proses tukar tambah sangat mudah dan cepat! Saya sangat puas
            dengan layanan CarTukar."
          </p>
          <div class="testimonial-author">
            <img src="pic/CJ.jpg" alt="Andi" />
            <h3>- Carl Johnson</h3>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-content">
          <p>
            "Tim yang profesional dan ramah. Saya mendapatkan harga terbaik
            untuk mobil saya!"
          </p>
          <div class="testimonial-author">
            <img src="mr.beast.jpeg" alt="Budi" />
            <h3>- Mr.Beast</h3>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-content">
          <p>
            "Pengalaman yang luar biasa! Mobil baru saya sangat sesuai dengan
            harapan."
          </p>
          <div class="testimonial-author">
            <img
              src="ishowspeed can i have some robux (2).jpeg"
              alt="Citra" />
            <h3>- Darren Jason Watkins Jr</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
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
  <!-- Testimoni Pelanggan Section End -->
  <script>
    document
      .querySelector(".calculator-form")
      .addEventListener("submit", function(event) {
        event.preventDefault();

        const brand = document.getElementById("car-brand").value;
        const model = document.getElementById("car-model").value;
        const year = document.getElementById("car-year").value;
        const condition = document.getElementById("car-condition").value;

        // Simulasi perhitungan nilai tukar tambah
        let estimatedValue = 0;
        if (condition === "baik") {
          estimatedValue = 200000000; // Contoh nilai untuk kondisi baik
        } else if (condition === "sedang") {
          estimatedValue = 150000000; // Contoh nilai untuk kondisi sedang
        } else {
          estimatedValue = 100000000; // Contoh nilai untuk kondisi buruk
        }

        document.getElementById(
          "result-value"
        ).textContent = `Rp ${estimatedValue.toLocaleString()}`;
      });
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