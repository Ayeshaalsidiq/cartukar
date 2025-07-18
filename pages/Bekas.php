<main class="car-listing-page">
  <div class="listing-container">

    <div class="filter-container">
      <div class="search-bar-wrapper">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Cari mobil menurut Merek, Model, atau Kata Kunci">
      </div>

      <div class="filter-row">

        <div class="filter-buttons">
          <button class="filter-btn">Merek & Model</button>
          <button class="filter-btn">Tipe</button>
          <button class="filter-btn">Harga & Cicilan</button>
          <button class="filter-btn">Tahun</button>
          <button class="filter-btn">Transmisi</button>
        </div>

        <div class="filter-actions">
          <button class="filter-btn-alt">All Filters <i class="fas fa-sliders-h"></i></button>
          <select class="sort-dropdown">
            <option>Sort: Populer</option>
            <option>Sort: Terbaru</option>
            <option>Sort: Harga Terendah</option>
            <option>Sort: Harga Tertinggi</option>
          </select>
        </div>

      </div>
    </div>

    <div class="promo-banner">
      <img src="assets/images/banner-lebihmurah.png" alt="Promo Lebih Murah">
    </div>

    <div class="results-header">
      <p><strong>81</strong> Hasil</p>
    </div>

    <div class="car-grid">
      <?php
      // 1. KONEKSI KE DATABASE
      $koneksi = new mysqli('localhost', 'root', '', 'cartukar_db');
      if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
      }

      // 2. QUERY UNTUK MENGAMBIL SEMUA DATA MOBIL
      $sql = "SELECT * FROM mobil ORDER BY id DESC";
      $result = $koneksi->query($sql);

      // 3. LAKUKAN PERULANGAN UNTUK MENAMPILKAN SETIAP MOBIL
      if ($result->num_rows > 0) {
        while ($mobil = $result->fetch_assoc()) {
      ?>

          <a href="index.php?page=detail&id=<?php echo htmlspecialchars($mobil['id']); ?>" class="car-card-v2">
            <div class="card-image-v2">
              <img src="../assets/images/<?php echo htmlspecialchars($mobil['gambar_utama']); ?>" alt="<?php echo htmlspecialchars($mobil['nama']); ?>">
              <div class="image-counter">1/5</div>
            </div>
            <div class="card-content-v2">
              <div class="certified-badge">
                CARSOME Certified
              </div>
              <div class="title-wrapper">
                <h4 class="car-title"><?php echo htmlspecialchars($mobil['nama']); ?></h4>
                <button class="btn-wishlist"><i class="far fa-heart"></i></button>
              </div>
              <p class="car-specs">
                <?php echo htmlspecialchars($mobil['jarak_tempuh']); ?> km &middot; <?php echo htmlspecialchars($mobil['transmisi']); ?> &middot; <?php echo htmlspecialchars($mobil['lokasi']); ?>
              </p>
              <div class="price-section-v2">
                <p class="main-price">Rp <?php echo number_format($mobil['harga_kredit'], 0, ',', '.'); ?></p>
                <p class="cash-price"><s>Rp <?php echo number_format($mobil['harga_tunai'], 0, ',', '.'); ?></s> (Cash)</p>
              </div>
            </div>
          </a>

      <?php
        } // Akhir dari while loop
      } else {
        echo "<p>Tidak ada mobil yang tersedia saat ini.</p>";
      }
      $koneksi->close();
      ?>
    </div>
</main>