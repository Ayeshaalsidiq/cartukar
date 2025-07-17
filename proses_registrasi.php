<?php
session_start(); // Wajib ada untuk memulai session

// --- KONFIGURASI & KONEKSI DATABASE ---
$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'cartukar_db';
$koneksi = new mysqli($host, $db_user, $db_pass, $db_name);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil semua data dari form
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];

    // Hash password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Query SQL untuk menyimpan data
    $sql = "INSERT INTO users (nama_lengkap, username, email, password, tanggal_lahir, alamat) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $koneksi->prepare($sql);

    // Bind parameter
    $stmt->bind_param("ssssss", $nama_lengkap, $username, $email, $password_hash, $tanggal_lahir, $alamat);

    // Eksekusi statement
    if ($stmt->execute()) {
        // --- INI BAGIAN PENTINGNYA ---

        // 1. Dapatkan ID dari user yang baru saja dibuat
        $new_user_id = $stmt->insert_id;

        // 2. Buat session untuk user tersebut (langsung login)
        $_SESSION['user_id'] = $new_user_id;

        // 3. Arahkan langsung ke halaman utama
        header("Location: views/index.php");
        exit(); // Selalu gunakan exit() setelah header redirect

    } else {
        // Jika gagal, tampilkan error
        echo "Error saat registrasi: " . $stmt->error;
    }

    $stmt->close();
    $koneksi->close();
}
