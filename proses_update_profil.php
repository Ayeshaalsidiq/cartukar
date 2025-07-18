<?php
session_start();

// Keamanan: Cek jika user belum login atau form tidak disubmit
if (!isset($_SESSION['user_id']) || $_SERVER["REQUEST_METHOD"] != "POST") {
    // Arahkan ke halaman utama jika akses tidak sah
    header("Location: views/index.php");
    exit();
}

// --- Koneksi Database ---
$koneksi = new mysqli('localhost', 'root', '', 'cartukar_db');
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data dari form dan ID user dari session
$user_id = $_SESSION['user_id'];
$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$email = $_POST['email'];

// --- Query UPDATE dengan Prepared Statements (Sangat Aman) ---
$sql = "UPDATE users SET nama_lengkap = ?, username = ?, email = ? WHERE id = ?";

$stmt = $koneksi->prepare($sql);

// Bind parameter ke query
$stmt->bind_param("sssi", $nama_lengkap, $username, $email, $user_id);

// Eksekusi statement
if ($stmt->execute()) {
    // Jika berhasil, kembalikan ke halaman pengaturan dengan pesan sukses
    header("Location: views/index.php?page=pengaturan&status=sukses");
    exit();
} else {
    // Jika gagal, tampilkan error (untuk debugging)
    echo "Error saat memperbarui profil: " . $stmt->error;
}

$stmt->close();
$koneksi->close();
