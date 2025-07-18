// Ambil elemen dari HTML
const menuBtn = document.querySelector("#menu-btn");
const mainNav = document.querySelector(".main-nav"); // GANTI DARI .navbar MENJADI .main-nav

// Fungsi saat menu hamburger di-klik
if (menuBtn && mainNav) {
  menuBtn.onclick = () => {
    menuBtn.classList.toggle("fa-times");
    mainNav.classList.toggle("active");
  };
}

// --- LOGIKA BARU UNTUK DROPDOWN/ACCORDION DI MOBILE ---
const dropdownTriggers = document.querySelectorAll(
  ".dropdown .dropdown-trigger"
);

dropdownTriggers.forEach((trigger) => {
  trigger.onclick = (e) => {
    // Cek jika layar <= 768px (mode mobile)
    if (window.innerWidth <= 768) {
      e.preventDefault(); // Mencegah link pindah halaman di mobile

      // Cari dropdown menu terkait
      const dropdownMenu = trigger.nextElementSibling;

      // Toggle class 'active' untuk buka/tutup menu
      dropdownMenu.classList.toggle("active");

      // Toggle class 'active' untuk rotasi panah
      trigger.classList.toggle("active");
    }
  };
});

// --- Fungsi untuk Dropdown Menu User (On Click) ---
const userMenuTrigger = document.querySelector("#user-menu-trigger");
const userDropdown = document.querySelector(".user-dropdown");

if (userMenuTrigger && userDropdown) {
  // Saat ikon profil di-klik
  userMenuTrigger.addEventListener("click", (event) => {
    // Mencegah link langsung pindah halaman
    event.preventDefault();
    // Toggle (memunculkan/menyembunyikan) menu
    userDropdown.classList.toggle("active");
  });

  // Logika untuk menutup dropdown saat klik di luar area menu
  window.addEventListener("click", (event) => {
    // Cek jika yang diklik BUKAN ikon trigger DAN BUKAN bagian dari dropdown itu sendiri
    if (
      !userMenuTrigger.contains(event.target) &&
      !userDropdown.contains(event.target)
    ) {
      userDropdown.classList.remove("active");
    }
  });
}

// Fungsi untuk menghilangkan menu saat window di-scroll
window.onscroll = () => {
  if (menuBtn && mainNav) {
    menuBtn.classList.remove("fa-times");
    mainNav.classList.remove("active");
  }

  // Beri bayangan pada header saat di-scroll
  if (window.scrollY > 0) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
};

// Efek parallax di home section
const homeSection = document.querySelector(".home");
if (homeSection) {
  homeSection.onmousemove = (e) => {
    document.querySelectorAll(".home-parallax").forEach((elm) => {
      let speed = elm.getAttribute("data-speed");
      let x = (window.innerWidth - e.pageX * speed) / 90;
      let y = (window.innerHeight - e.pageY * speed) / 90;
      elm.style.transform = `translateX(${y}px) translateY(${x}px)`;
    });
  };

  homeSection.onmouseleave = () => {
    document.querySelectorAll(".home-parallax").forEach((elm) => {
      elm.style.transform = `translateX(0px) translateY(0px)`;
    });
  };
}

// Inisialisasi Swiper Sliders
var swiperVehicles = new Swiper(".vehicles-slider", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  grabCursor: true,
  centeredSlides: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    991: { slidesPerView: 3 },
  },
});

var swiperFeatured = new Swiper(".featured-slider", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  grabCursor: true,
  centeredSlides: true,
  autoplay: {
    delay: 4500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    991: { slidesPerView: 3 },
  },
});

var swiperReviews = new Swiper(".reviews-slider", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  grabCursor: true,
  centeredSlides: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    991: { slidesPerView: 3 },
  },
});

// --- Fungsi untuk Tab di Section "How It Works" ---
const tabs = document.querySelectorAll(".tab-button");
const tabPanes = document.querySelectorAll(".tab-pane");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    // Hapus kelas 'active' dari semua tombol dan konten
    tabs.forEach((item) => item.classList.remove("active"));
    tabPanes.forEach((pane) => pane.classList.remove("active"));

    // Tambahkan kelas 'active' ke tombol yang diklik dan konten yang sesuai
    const target = document.querySelector(tab.dataset.target);
    tab.classList.add("active");
    target.classList.add("active");
  });
});

// --- Fungsi untuk Tab di Halaman Login/Registrasi ---
const loginTabs = document.querySelectorAll(".tab-btn");
const formBoxes = document.querySelectorAll(".form-box");

loginTabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    // Hapus kelas 'active' dari semua tombol dan form
    loginTabs.forEach((item) => item.classList.remove("active"));
    formBoxes.forEach((box) => box.classList.remove("active"));

    // Tambahkan kelas 'active' ke tombol yang diklik
    tab.classList.add("active");

    // Tampilkan form yang sesuai dengan data-form dari tombol
    const formId = tab.dataset.form;
    const targetForm = document.getElementById(formId + "-form");
    targetForm.classList.add("active");
  });
});
// GANTI FUNGSI LAMA DENGAN KODE INI
// --- Fungsi untuk Galeri Gambar di Halaman Detail ---
const mainImage = document.getElementById("main-car-image");
const thumbnails = document.querySelectorAll(".thumb");

// Cek apakah elemennya ada di halaman ini
if (mainImage && thumbnails.length > 0) {
  thumbnails.forEach((thumb) => {
    // Tambahkan 'pendengar' klik ke setiap gambar kecil
    thumb.addEventListener("click", function () {
      // Hapus kelas 'active' dari semua thumbnail
      thumbnails.forEach((item) => item.classList.remove("active"));

      // Tambahkan kelas 'active' ke thumbnail yang baru saja diklik
      this.classList.add("active");

      // Ganti sumber (src) dari gambar utama dengan sumber thumbnail yang diklik
      mainImage.src = this.src;
    });
  });
}
// --- Fungsi untuk Tab di Section Spesifikasi ---
const specTabs = document.querySelectorAll(".spec-tabs .tab-button");
const specPanes = document.querySelectorAll(".spec-tab-content .tab-pane");

specTabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    // Hapus kelas 'active' dari semua tombol dan konten
    specTabs.forEach((item) => item.classList.remove("active"));
    specPanes.forEach((pane) => pane.classList.remove("active"));

    // Tambahkan kelas 'active' ke tombol yang diklik dan konten yang sesuai
    const target = document.querySelector(tab.dataset.target);
    tab.classList.add("active");
    if (target) {
      target.classList.add("active");
    }
  });
});
