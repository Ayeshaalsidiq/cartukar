<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CarTukar</title>
    <link rel="icon" type="image/png" href="../assets/images/logo-cartukar.png">
    <link rel="stylesheet" href="../assets/css/home.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>

    <header class="new-header">
        <div class="header-container">
            <div id="menu-btn" class="fas fa-bars"></div>

            <div class="header-group-left">
                <a href="index.php" class="logo"><span>Car</span>Tukar</a>
                <nav class="main-nav">
                    <div class="dropdown">
                        <a href="index.php?page=bekas">Beli Mobil <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-menu mega-menu">
                            <div class="mega-menu-content">
                                <div class="mega-menu-column">
                                    <a href="http://localhost/CARTUKAR/views/index.php?page=bekas" class="mega-menu-title">Tampilkan Semua Mobil <i class="fas fa-chevron-right"></i></a>
                                    <a href="#">CARTUKAR Certified <i class="fas fa-chevron-right"></i></a>
                                    <a href="#">CARTUKAR Value <i class="fas fa-chevron-right"></i></a>
                                </div>
                                <div class="mega-menu-column">
                                    <div class="brand-grid">
                                        <a href="#">Daihatsu</a><a href="#">Honda</a>
                                        <a href="#">Hyundai</a><a href="#">Mazda</a>
                                        <a href="#">Mitsubishi</a><a href="#">Suzuki</a>
                                        <a href="#">Toyota</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="index.php?page=jual">Jual Mobil <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-menu">
                            <a href="#">Jual Mobil</a>
                            <a href="#">Tukar Tambah</a>
                        </div>
                    </div>

                    <a href="index.php?page=faq">FAQ</a>

                    <div class="dropdown">
                        <a href="#">Tentang CARTUKAR <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-menu">
                            <a href="#">Tentang Kami</a>
                            <a href="#">CARTUKAR Certified Lab</a>
                            <a href="#">Berita</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="#">Lainnya <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-menu">
                            <a href="#">Daftar sebagai Dealer</a>
                            <a href="#">Masuk sebagai Dealer</a>
                            <a href="#">Daftar sebagai CARTUKAR Afiliasi</a>
                        </div>
                    </div>
                </nav>
            </div>

            <<div class="action-item-login">
                <?php if (isset($_SESSION['user_id'])): ?>

                    <a href="index.php?page=profile" class="action-item" id="user-menu-trigger">
                        <i class="fas fa-user-circle"></i>
                    </a>

                    <div class="dropdown-menu user-dropdown">
                        <a href="index.php?page=profile">Akun Saya</a>
                        <a href="index.php?page=pesanan">Pesanan Saya</a>

                        <a href="../logout.php">Keluar</a>
                    </div>

                <?php else: ?>

                    <a href="index.php?page=login" class="action-item">
                        <i class="far fa-user-circle"></i> <span>Daftar/Masuk</span>
                    </a>

                <?php endif; ?>
        </div>
    </header>