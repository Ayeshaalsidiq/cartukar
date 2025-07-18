<?php
// KEAMANAN: Cek apakah user sudah login. Jika belum, tendang ke halaman login.
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php?page=login");
    exit();
}

// Ambil ID user dari session
$user_id = $_SESSION['user_id'];

// --- KONEKSI KE DATABASE (Ganti dengan file koneksi.php jika ada) ---
$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'cartukar_db';
$konezione = new mysqli($host, $db_user, $db_pass, $db_name);

if ($konezione->connect_error) {
    die("Koneksi gagal: " . $konezione->connect_error);
}
// --- AKHIR KONEKSI ---

// Ambil data nama lengkap user dari database
$nama_user = "Pengguna"; // Default name
$sql = "SELECT nama_lengkap FROM users WHERE id = ?";
$stmt = $konezione->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
if ($user = $result->fetch_assoc()) {
    // Ambil nama depan saja untuk sapaan
    $nama_user = explode(' ', $user['nama_lengkap'])[0];
}
$stmt->close();
$konezione->close();
?>

<main class="profile-page">
    <div class="profile-header">
        <div class="header-content">
            <h2>Selamat Datang, <?php echo htmlspecialchars($nama_user); ?>!</h2>
            <a href="index.php?page=pengaturan" class="settings-btn"><i class="fas fa-cog"></i></a>
        </div>
    </div>

    <div class="profile-body">
        <div class="profile-main-card">
            <a href="#" class="main-card-item">
                <i class="fas fa-calendar-check"></i>
                <span>Jadwal Temu Saya</span>
            </a>
            <a href="#" class="main-card-item">
                <i class="fas fa-car"></i>
                <span>Pesanan Saya</span>
            </a>
            <a href="#" class="main-card-item">
                <i class="fas fa-ticket-alt"></i>
                <span>Voucher Saya</span>
            </a>
        </div>

        <div class="profile-link-list">
            <a href="#" class="profile-list-item">
                <div class="item-icon-title">
                    <i class="fas fa-heart"></i>
                    <span>Favorit Saya</span>
                </div>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="#" class="profile-list-item">
                <div class="item-icon-title">
                    <i class="fas fa-history"></i>
                    <span>Histori Pencarian Saya</span>
                </div>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
</main>