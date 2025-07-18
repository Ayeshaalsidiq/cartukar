<?php
// Keamanan: Pastikan user sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php?page=login");
    exit();
}

$user_id = $_SESSION['user_id'];

// --- Koneksi Database ---
$koneksi = new mysqli('localhost', 'root', '', 'cartukar_db');
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// --- Ambil data user yang sedang login untuk ditampilkan di form ---
$sql = "SELECT nama_lengkap, username, email FROM users WHERE id = ?";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user_data = $result->fetch_assoc();
$stmt->close();

?>

<main class="settings-page">
    <div class="settings-container">
        <h1>Pengaturan Akun</h1>
        <p>Perbarui informasi akun Anda di bawah ini.</p>

        <form action="../proses_update_profil.php" method="POST" class="settings-form">

            <?php if (isset($_GET['status']) && $_GET['status'] == 'sukses'): ?>
                <div class="success-message">Profil berhasil diperbarui!</div>
            <?php endif; ?>

            <div class="input-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo htmlspecialchars($user_data['nama_lengkap']); ?>" required>
            </div>

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user_data['username']); ?>" required>
            </div>

            <div class="input-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user_data['email']); ?>" required>
            </div>

            <button type="submit" class="btn">Simpan Perubahan</button>
        </form>
    </div>
</main>