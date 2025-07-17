<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Location - CarTukar</title>
  <link rel="stylesheet" href="lokasikami.css" />
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
    <a href="index.php" class="logo"><span>Car</span>Tukar
    </a>
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

  <div class="container">
    <!-- Experience Center Section Start -->
    <h1 class="heading">Our <span>Location</span></h1>
    <section class="experience-center">
      <img src="pic/location.png" alt="Experience Center Image" />
      <!-- Gambar di sebelah kiri -->
      <div class="text-content">
        <!-- Konten teks di sebelah kanan -->
        <h3 class="text-content">Experience Center</h3>
        <p>
          Kunjungi one-stop center kami dimana Anda dapat membeli dan menjual
          mobil Anda pada 1 kali kunjungan. Disini Anda dapat mencari tahu,
          test drive dan memesan mobil sesuai dengan CARTUKAR Promise saat
          mobil Anda diinspeksi untuk di tukar tambah.
        </p>
        <h2 class="subheading">Di CARTUKAR Experience Center ini:</h2>
        <ul>
          <li>
            <i class="fas fa-check-circle"></i> Tentukan jadwal inspeksi atau
            datang langsung
          </li>
          <li><i class="fas fa-check-circle"></i> Inspeksi GRATIS</li>
          <li>
            <i class="fas fa-check-circle"></i> Pengambilan unit sendiri atau
            pengiriman ke rumah
          </li>
          <li><i class="fas fa-check-circle"></i> Konsultasi</li>
          <li>
            <i class="fas fa-check-circle"></i> Terima pembayaran di hari yang
            sama
          </li>
        </ul>
      </div>
    </section>
    <!-- Experience Center Section End -->
  </div>

  <!-- Inspection Section Start -->
  <section class="inspeksi">
    <div class="text-content-i">
      <div class="text-content-inspeksi">
        <h3>Inspection Center</h3>
        <p>
          Siapkan mobil Anda untuk diinspeksi oleh inspektor profesional kami
          dan dapatkan harga terbaik untuk mobil Anda. Pilih untuk jual kepada
          kami, terima pembayaran dalam masa 24 jam* dan kami akan urus semua
          masalah dokumen Anda.
        </p>
        <h2 class="inspeksi-subheading">Di CARTUKAR Inspection Center ini</h2>
        <ul>
          <li>
            <i class="fas fa-check-circle"></i> Tentukan jadwal inspeksi atau
            datang langsung
          </li>
          <li><i class="fas fa-check-circle"></i> Inspeksi GRATIS</li>
          <li><i class="fas fa-check-circle"></i> Konsultasi</li>
          <li>
            <i class="fas fa-check-circle"></i> Terima pembayaran di hari yang
            sama
          </li>
        </ul>
      </div>
    </div>
    <img src="pic/inspeksi.webp" alt="Inspection Image" />
  </section>
  <!-- Inspection Section End -->

  <!-- Tersekat Section Start -->
  <section class="tersekat">
    <div class="text-content-t">
      <h1 class="heading">Kunjungi Lokasi <span>Terdekat Anda</span></h1>
      <p>Pilih Kota pada pilihan dibawah ini</p>
      <select id="city-select" class="city-select">
        <option value="" disabled selected>Pilih Kota</option>
        <option value="bandung">Bandung</option>
        <option value="jakarta">Jakarta</option>
        <option value="bali">Bali</option>
        <option value="yogyakarta">Yogyakarta</option>
        <option value="bekasi">Bekasi</option>
      </select>
    </div>

    <div class="map-banyak">
      <div class="location-list">
        <h2>Lokasi Kami</h2>
        <div class="location-item">
          <h3>Meruya Stockyard</h3>
          <p>
            2, RT.2/RW.1, Meruya Utara, Kec. Kembangan, Kota Jakarta Barat,
            Daerah Khusus Ibukota Jakarta 11620, Indonesia
          </p>
          <a
            href="https://www.google.com/maps?q=2,+RT.2/RW.1,+Meruya+Utara,+Kec.+Kembangan,+Kota+Jakarta+Barat,+Daerah+Khusus+Ibukota+Jakarta+11620,+Indonesia"
            target="_blank">Tunjukkan Peta</a>
        </div>

        <div class="location-item">
          <h3>Carsome Veteran Experience Center</h3>
          <p>
            7, Jl. Bintaro Mulia I No.3, RW.1, Bintaro, Kec. Pesanggrahan,
            Kota Jakarta Selatan, Jakarta, Daerah Khusus Ibukota Jakarta
            12330.
          </p>
          <p>Senin - Minggu pukul 09.00 s/d 18.00</p>
          <a
            href="https://www.google.com/maps?q=7,+Jl.+Bintaro+Mulia+I+No.3,+RW.1,+Bintaro,+Kec.+Pesanggrahan,+Kota+Jakarta+Selatan,+Jakarta,+Daerah+Khusus+Ibukota+Jakarta+12330"
            target="_blank">Tunjukkan Peta</a>
        </div>

        <div class="location-item">
          <h3>Carsome Puri Mansion Inspection Center</h3>
          <p>
            Ruko Puri Mansion Blok A Nomor 38, Jl. Lingkar Luar Barat,
            RT.2/RW.1, Kembangan Sel., Kembangan, Kota Jakarta Barat, Daerah
            Khusus Ibukota Jakarta 11610, Indonesia
          </p>
          <p>Senin - Minggu pukul 09.00 s/d 18.00</p>
          <a
            href="https://www.google.com/maps?q=Ruko+Puri+Mansion+Blok+A+Nomor+38,+Jl.+Lingkar+Luar+Barat,+RT.2/RW.1,+Kembangan+Sel.,+Kembangan,+Kota+Jakarta+Barat,+Daerah+Khusus+Ibukota+Jakarta+11610"
            target="_blank">Tunjukkan Peta</a>
        </div>

        <div class="location-item">
          <h3>Carsome Inspection Point @ Washy Washy Bintaro</h3>
          <p>
            Jalan Bintaro Utama Blok HJ1 No. 3, Sektor 9, Pd. Pucung, Pondok
            Aren, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15229
          </p>
          <p>Senin - Minggu pukul 09.00 s/d 18.00</p>
          <a
            href="https://www.google.com/maps?q=Jalan+Bintaro+Utama+Blok+HJ1+No.+3,+Sektor+9,+Pd.+Pucung,+Pondok+Aren,+Kec.+Pd.+Aren,+Kota+Tangerang+Selatan,+Banten+15229"
            target="_blank">Tunjukkan Peta</a>
        </div>

        <div class="location-item">
          <h3>Carsome Inspection Point @ Q Square Lifestyle Park</h3>
          <p>
            Bogor Outer Ring Rd No.Km. 50, Cijujung, Sukaraja, Bogor Regency,
            West Java 16710
          </p>
          <p>Senin - Minggu pukul 09.00 s/d 18.00</p>
          <a
            href="https://www.google.com/maps?q=Bogor+Outer+Ring+Rd+No.Km.+50,+Cijujung,+Sukaraja,+Bogor+Regency,+West+Java+16710"
            target="_blank">Tunjukkan Peta</a>
        </div>

        <div class="location-item">
          <h3>Carsome Inspection Point @ Plaza Cibubur Bekasi</h3>
          <p>
            Jl. Alternatif Cibubur, Jatikarya, Kec. Jatisampurna, Kota Bekasi
          </p>
          <p>Senin - Minggu pukul 09.00 s/d 21.00</p>
          <a
            href="https://www.google.com/maps?q=Jl.+Alternatif+Cibubur,+Jatikarya,+Kec.+Jatisampurna,+Kota+Bekasi"
            target="_blank">Tunjukkan Peta</a>
        </div>

        <div class="location-item">
          <h3>Carsome Inspection Point @ Kelapa Gading</h3>
          <p>
            LC 7, Jl. Boulevard Bar. Raya kav 64, blok, RT.13/RW.7, Klp.
            Gading Bar., Kec. Klp. Gading, Jkt Utara, Daerah Khusus Ibukota
            Jakarta 14250
          </p>
          <p>Senin - Minggu pukul 09.00 s/d 18.00</p>
          <a
            href="https://www.google.com/maps?q=LC+7,+Jl.+Boulevard+Bar.+Raya+kav+64,+blok,+RT.13/RW.7,+Klp.+Gading+Bar.,+Kec.+Klp.+Gading,+Jkt+Utara,+Daerah+Khusus+Ibukota+Jakarta+14250"
            target="_blank">Tunjukkan Peta</a>
        </div>

        <div class="location-item">
          <h3>Carsome Bekasi Siliwangi Experience Center</h3>
          <p>
            Jl. Raya Siliwangi No.130, RT.001/RW.005, Sepanjang Jaya, Kec.
            Rawalumbu, Kota Bks, Jawa Barat 17114
          </p>
          <p>Senin - Minggu pukul 09.00 s/d 18.00</p>
          <a
            href="https://www.google.com/maps?q=Jl.+Raya+Siliwangi+No.130,+RT.001/RW.005,+Sepanjang+Jaya,+Kec.+Rawalumbu,+Kota+Bks,+Jawa+Barat+17114"
            target="_blank">Tunjukkan Peta</a>
        </div>

        <div class="location-item">
          <h3>Carsome Alam Sutera Experience Center</h3>
          <p>
            Ruko Jalur Sutera, Perumahan Alam Sutera, 25 BC Nomor B06 Dan 07,
            Alam Sutera, Tangerang, Banten 15143
          </p>
          <p>Senin - Minggu pukul 09.00 s/d 18.00</p>
          <a
            href="https://www.google.com/maps?q=Ruko+Jalur+Sutera,+Perumahan+Alam+Sutera,+25+BC+Nomor+B06+Dan+07,+Alam+Sutera,+Tangerang,+Banten+15143"
            target="_blank">Tunjukkan Peta</a>
        </div>
      </div>
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3043246455304!2d107.63004257504437!3d-6.973377193027322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9afad6fa06f%3A0xd4fc2f579a78668a!2sFakultas%20Ilmu%20Terapan%20Universitas%20Telkom!5e0!3m2!1sid!2sid!4v1735588643383!5m2!1sid!2sid"
          width="100%"
          height="550"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"></iframe>
      </div>
    </div>
  </section>
  <!-- Tersekat Section End -->

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