let currentPage = 1; // Halaman saat ini
const itemsPerPage = 10; // Jumlah item per halaman
const totalItems = 30; // Total item (misalnya, total mobil)

function renderPagination() {
  const paginationContainer = document.querySelector(".pagination");
  paginationContainer.innerHTML = ""; // Kosongkan konten sebelumnya

  const totalPages = Math.ceil(totalItems / itemsPerPage); // Hitung total halaman

  // Previous button
  const prevButton = document.createElement("a");
  prevButton.href = "#";
  prevButton.className = "prev";
  prevButton.textContent = "« Prev";
  prevButton.onclick = () => changePage(currentPage - 1);
  paginationContainer.appendChild(prevButton);

  // Page numbers
  for (let i = 1; i <= totalPages; i++) {
    const pageNumber = document.createElement("a");
    pageNumber.href = "#";
    pageNumber.className = "page-number" + (i === currentPage ? " active" : "");
    pageNumber.textContent = i;
    pageNumber.onclick = () => changePage(i);
    paginationContainer.appendChild(pageNumber);
  }

  // Next button
  const nextButton = document.createElement("a");
  nextButton.href = "#";
  nextButton.className = "next";
  nextButton.textContent = "Next »";
  nextButton.onclick = () => changePage(currentPage + 1);
  paginationContainer.appendChild(nextButton);
}

function changePage(page) {
  const totalPages = Math.ceil(totalItems / itemsPerPage);
  if (page < 1 || page > totalPages) return; // Cek batas halaman
  currentPage = page;
  renderPagination(); // Render ulang pagination
  // Tambahkan logika untuk menampilkan item sesuai halaman
}

// Inisialisasi pagination saat halaman dimuat
renderPagination();
