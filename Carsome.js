// Ambil elemen dari HTML
const menuBtn = document.querySelector("#menu-btn");
const navbar = document.querySelector(".header .navbar");
const header = document.querySelector(".header");

// --- Fungsi untuk Menu Hamburger Utama ---
if (menuBtn && navbar) {
  menuBtn.onclick = () => {
    menuBtn.classList.toggle("fa-times");
    navbar.classList.toggle("active");
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

// Fungsi untuk menghilangkan menu saat window di-scroll
window.onscroll = () => {
  if (menuBtn && navbar) {
    menuBtn.classList.remove("fa-times");
    navbar.classList.remove("active");
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
