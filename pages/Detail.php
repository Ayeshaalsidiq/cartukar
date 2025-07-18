<?php
// Cek ID mobil di URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: index.php?page=bekas");
    exit();
}
$mobil_id = $_GET['id'];

// Koneksi Database
$koneksi = new mysqli('localhost', 'root', '', 'cartukar_db');
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data mobil dari DB
$sql = "SELECT * FROM mobil WHERE id = ?";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("i", $mobil_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "<h1>Mobil tidak ditemukan!</h1>";
    exit();
}
$mobil = $result->fetch_assoc();
$stmt->close();
$koneksi->close();
?>

<main class="car-detail-page">
    <div class="detail-container">
        <div class="detail-gallery">
            <div class="main-image">
                <img src="../assets/images/<?php echo htmlspecialchars($mobil['gambar_utama']); ?>" alt="<?php echo htmlspecialchars($mobil['nama']); ?>" id="main-car-image">
                <div class="image-counter">1/5</div>
            </div>
            <div class="thumbnail-images">
                <img src="../assets/images/<?php echo htmlspecialchars($mobil['gambar_utama']); ?>" class="thumb active">
                <img src="../assets/images/hyundai-interior.png" class="thumb">
                <img src="../assets/images/hyundai-side.png" class="thumb">
                <img src="../assets/images/hyundai-back.png" class="thumb">
                <img src="../assets/images/hyundai-front.png" class="thumb">
            </div>
        </div>

        <div class="detail-info">
            <div class="card-badge">
                <img src="assets/images/certified-icon.png" alt="Certified">
                <span>CARTUKAR Certified</span>
            </div>

            <div class="title-wrapper-v2">
                <h1><?php echo htmlspecialchars($mobil['nama']); ?></h1>
                <div class="title-actions">
                    <button class="btn-wishlist"><i class="far fa-heart"></i></button>
                    <button class="btn-share"><i class="fas fa-share-alt"></i></button>
                </div>
            </div>

            <p class="car-specs-main"><?php echo htmlspecialchars($mobil['jarak_tempuh']); ?> km &middot; <?php echo htmlspecialchars($mobil['transmisi']); ?></p>

            <div class="price-section-v2">
                <p class="main-price">Rp <?php echo number_format($mobil['harga_kredit'], 0, ',', '.'); ?></p>
                <p class="cash-price"><s>Rp <?php echo number_format($mobil['harga_tunai'], 0, ',', '.'); ?></s> (Cash)</p>
            </div>

            <a href="#" class="credit-simulation-link"><i class="fas fa-calculator"></i> Simulasi Kredit</a>

            <div class="info-actions-v2">
                <a href="#" class="info-item highlight">
                    <i class="fas fa-ticket-alt"></i><span>Voucher Saya</span><i class="fas fa-chevron-right"></i>
                </a>

                <div class="info-item expandable">
                    <div class="item-header">
                        <i class="fas fa-shield-alt"></i><span>Harga Telah Mencakup Semua</span><i class="fas fa-chevron-down expand-arrow"></i>
                    </div>
                    <div class="item-content">
                        <ul>
                            <li>Garansi 1 Tahun (Mesin, Transmisi, AC)</li>
                            <li>Pajak Kendaraan</li>
                            <li>Asuransi TLO</li>
                        </ul>
                    </div>
                </div>

                <div class="info-item expandable">
                    <div class="item-header">
                        <i class="fas fa-map-marker-alt"></i><span>Lokasi Mobil</span><i class="fas fa-chevron-down expand-arrow"></i>
                    </div>
                    <div class="item-content">
                        <p>CARTUKAR Center di <?php echo htmlspecialchars($mobil['lokasi']); ?></p>
                    </div>
                </div>
            </div>

            <div class="purchase-actions-wrapper">
                <i class="fas fa-phone-alt action-icon"></i>
                <div class="purchase-buttons">
                    <button class="btn btn-secondary v2">
                        <strong>Pesan Mobil</strong>
                        <span>Dapat Dikembalikan</span>
                    </button>
                    <button class="btn btn-primary v2">
                        <strong>Tes Drive Gratis</strong>
                        <span>Di Experience Center</span>
                    </button>
                </div>
            </div>
            <a href="#" class="whatsapp-link-boxed">
                <span>Butuh bantuan? Hubungi kami melalui</span>
                <i class="fab fa-whatsapp"></i>
                <strong>WhatsApp</strong>
            </a>
        </div>
    </div>
    <div class="detail-specs-section">
        <div class="spec-tabs">
            <button class="tab-button active" data-target="#spec-detail">Detail Mobil</button>
            <button class="tab-button" data-target="#spec-fitur">Fitur</button>
            <button class="tab-button" data-target="#spec-inspeksi">Laporan Inspeksi</button>
            <button class="tab-button" data-target="#spec-pembiayaan">Pembiayaan</button>
        </div>
        <div class="spec-tab-content">
            <div class="tab-pane active" id="spec-detail">
                <div class="spec-content-header">
                    <div class="title-decorator"></div>
                    <h2>Detail Mobil</h2>
                    <p>ID: <?php echo 'CG' . str_pad($mobil['id'], 6, '0', STR_PAD_LEFT); ?></p>
                </div>
                <div class="spec-grid">
                </div>
            </div>
        </div>
    </div>

</main>