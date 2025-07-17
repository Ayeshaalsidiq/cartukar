<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Mobil</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- My Style -->
    <link rel="stylesheet" href="Detail.css" />
  </head>
  <body>
    <div class="container">
      <img
        id="main-image"
        src="Avanza 21.avif"
        alt="Mobil Utama"
        class="car-image"
      />
      <div class="gallery">
        <img
          src="depan avanza.avif"
          alt="Depan Mobil"
          onclick="changeImage('depan avanza.avif')"
        />
        <img
          src="samping avanza.avif"
          alt="samping Mobil"
          onclick="changeImage('samping avanza.avif')"
        />
        <img
          src="belakang avanza.avif"
          alt="Belakang Mobil"
          onclick="changeImage('belakang avanza.avif')"
        />
        <img
          src="ban avanza.avif"
          alt="Ban Mobil"
          onclick="changeImage('ban avanza.avif')"
        />
        <img
          src="interior avanza.avif"
          alt="Interior Mobil"
          onclick="changeImage('interior avanza.avif')"
        />
        <img
          src="mesin mobil.avif"
          alt="Mesin mobil"
          onclick="changeImage('mesin mobil.avif')"
        />
      </div>
      <div class="details">
        <h2>
          Nama Mobil: 2021 Toyota AVANZA VELOZ 1.5
          <div class="social-icons">
            <a href="#" class="like-btn">
              <i class="fas fa-heart"></i>
            </a>
            <a href="#" class="share-btn">
              <i class="fas fa-share"></i>
            </a>
          </div>
        </h2>
        <ul>
          <li>
            <i class="fas fa-tag"></i> <strong>Harga:</strong> Rp 193.000.000
            <span class="small-text"> Rp 198.000.000 (Cash)</span>
          </li>
          <li>
            <i class="fas fa-info-circle"></i> <strong>Status:</strong> Bekas
          </li>
          <li>
            <i class="fas fa-calendar-alt"></i> <strong>Tahun:</strong> 2021
          </li>
          <li>
            <i class="fas fa-tachometer-alt"></i>
            <strong>Kilometer:</strong> 73.182 km
          </li>
          <li>
            <i class="fas fa-cogs"></i> <strong>Transmisi:</strong> Automatic
          </li>
          <li>
            <i class="fas fa-gas-pump"></i> <strong>Bahan Bakar:</strong> Bensin
          </li>
        </ul>

        <a href="#" class="btn">Pesan Mobil</a>
        <form action="cart.php" method="POST">
  <input type="hidden" name="id_user" value="1"> <!-- ganti sesuai user login -->
  <input type="hidden" name="id_produk" value="101"> <!-- ganti sesuai ID produk -->
  <input type="hidden" name="jumlah" value="1">
  <button type="submit" class="btn">Tambah Keranjang</button>
</form>

      </div>
    </div>
    <script>
      function changeImage(newSrc) {
        document.getElementById("main-image").src = newSrc;
      }
    </script>
  </body>
</html>
