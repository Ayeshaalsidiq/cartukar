<?php
// Selalu mulai session di setiap halaman yang berhubungan dengan login
session_start();

// --- Konfigurasi dan Koneksi Database ---
$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'cartukar_db';
$koneksi = new mysqli($host, $db_user, $db_pass, $db_name);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// --- Proses Form Jika Disubmit dengan Metode POST ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 1. Ambil data user dari database berdasarkan email
    $sql = "SELECT id, password, nama_lengkap FROM users WHERE email = ?";

    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Jika email ditemukan, ambil datanya
        $user = $result->fetch_assoc();

        // 2. Verifikasi password yang diinput dengan hash di database
        if (password_verify($password, $user['password'])) {
            // Jika password cocok -> LOGIN BERHASIL

            // 3. Simpan informasi user ke session sebagai "tanda pengenal"
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nama'] = $user['nama_lengkap']; // Opsional: simpan nama untuk sapaan

            // 4. Arahkan ke halaman utama (index.php di dalam views)
            header("Location: views/index.php");
            exit();
        } else {
            // Jika password salah, kembalikan ke halaman login dengan pesan error
            header("Location: views/index.php?page=login&error=password_salah");
            exit();
        }
    } else {
        // Jika email tidak ditemukan, kembalikan ke halaman login dengan pesan error
        header("Location: views/index.php?page=login&error=email_tidak_ditemukan");
        exit();
    }

    $stmt->close();
    $koneksi->close();
}
