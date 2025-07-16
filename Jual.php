<?php
// Panggil file header.php
include 'pages/header.php';
?>

<link rel="stylesheet" href="Jual.css" />
<!-- Tukar Tambah Mobil Section Start -->
<section class="trade-in" id="trade-in">
  <h1 class="heading"><span>Jual</span> Mobil Anda</h1>
  <div class="container">
    <div class="trade-in-content">
      <div class="trade-in-text">
        <h2>Proses Jual Mobil Tanpa Ribet, Cepat, dan Transparan!</h2>
        <p>Mobilmu terjual dengan harga mantap!</p>
        <ul class="benefits">
          <li>
            <i class="fas fa-file-alt"></i> Proses Mudah & Tanpa Repot
          </li>
          <li><i class="fas fa-shield-alt"></i> Terpercaya & Aman</li>
          <li><i class="fas fa-car"></i> Penawaran Terbaik</li>
          <li><i class="fas fa-rocket"></i> Pembayaran Cepat</li>
        </ul>
        <a href="#" class="btn">Mulai Sekarang</a>
      </div>
      <div class="trade-in-image">
        <img
          src="pic/Jualmobil.jpg"
          alt="Tukar Tambah Mobil"
          class="no-border" />
      </div>
    </div>
  </div>
</section>
<!-- Tukar Tambah Mobil Section End -->

<!-- Kalkulator Tukar Tambah Section Start -->
<section class="calculator" id="calculator">
  <h1 class="heading"><span>Kalkulator</span> Jual Mobil</h1>
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
        <label for="car-year">Kilometer mobil:</label>
        <input
          type="number"
          id="car-year"
          placeholder="Contoh: 5000"
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
      <button type="submit" class="btn">Hitung Nilai mobil</button>
    </form>
    <div class="calculator-result">
      <h3>Estimasi Harga Mobil:</h3>
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
          <img src="pic/mr.beast.jpeg" alt="Budi" />
          <h3>- Mr.Beast</h3>
        </div>
      </div>
    </div>
    <div class="testimonial-card">
      <div class="testimonial-content">
        <p>
          “CarTukar is like a good coach, they help me to achieve my goals
          and make me feel like Ronaldo, fr”
        </p>
        <div class="testimonial-author">
          <img src="pic/messi.jpg" alt="Budi" />
          <h3>- Lionel Messi</h3>
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
            src="pic/ishowspeed can i have some robux (2).jpeg"
            alt="Citra" />
          <h3>- Darren Jason Watkins Jr</h3>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="why-choose-us">
  <h1 class="heading"><span>Mengapa</span> Memilih CarTukar?</h1>
  <div class="container">
    <div class="benefits-grid">
      <div class="benefit-card">
        <i class="fas fa-check-circle"></i>
        <h3>Proses Cepat dan Mudah</h3>
        <p>
          Kami memastikan proses jual mobil Anda selesai dalam waktu
          singkat.
        </p>
      </div>
      <div class="benefit-card">
        <i class="fas fa-dollar-sign"></i>
        <h3>Harga Transparan</h3>
        <p>Dapatkan penawaran harga terbaik tanpa biaya tersembunyi.</p>
      </div>
      <div class="benefit-card">
        <i class="fas fa-shield-alt"></i>
        <h3>Aman dan Terpercaya</h3>
        <p>Transaksi aman dengan tim profesional yang berpengalaman.</p>
      </div>
    </div>
  </div>
</section>
<section class="steps">
  <h1 class="heading"><span>Langkah-Langkah</span> Jual Mobil</h1>
  <div class="container">
    <div class="steps-grid">
      <div class="step-card">
        <span class="step-number">1</span>
        <h3>Isi Formulir</h3>
        <p>Isi detail mobil Anda di formulir online kami.</p>
      </div>
      <div class="step-card">
        <span class="step-number">2</span>
        <h3>Penilaian Mobil</h3>
        <p>Tim kami akan menilai mobil Anda secara profesional.</p>
      </div>
      <div class="step-card">
        <span class="step-number">3</span>
        <h3>Terima Penawaran</h3>
        <p>Dapatkan penawaran harga terbaik untuk mobil Anda.</p>
      </div>
      <div class="step-card">
        <span class="step-number">4</span>
        <h3>Transaksi Selesai</h3>
        <p>Proses pembayaran cepat dan aman.</p>
      </div>
    </div>
  </div>
</section>
<section class="faq">
  <h1 class="heading"><span>Pertanyaan</span> yang Sering Diajukan</h1>
  <div class="container">
    <div class="faq-item">
      <h3>Bagaimana cara menjual mobil di CarTukar?</h3>
      <p>
        Anda hanya perlu mengisi formulir online dan tim kami akan
        menghubungi Anda untuk langkah selanjutnya.
      </p>
    </div>
    <div class="faq-item">
      <h3>Apakah ada biaya untuk menggunakan layanan ini?</h3>
      <p>Tidak, kami tidak mengenakan biaya untuk penilaian mobil Anda.</p>
    </div>
    <div class="faq-item">
      <h3>Berapa lama proses penjualan mobil?</h3>
      <p>
        Proses penjualan biasanya memakan waktu kurang dari 24 jam setelah
        penilaian selesai.
      </p>
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
          <img src="pic/app store.png" alt="Download on the App Store" />
        </a>
      </div>
      <div class="app-icon">
        <a href="#" target="_blank">
          <img src="pic/play store.png" alt="Get it on Google Play" />
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