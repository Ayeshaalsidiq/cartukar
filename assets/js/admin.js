document.querySelectorAll(".nav-link").forEach((link) => {
  link.addEventListener("click", function (e) {
    e.preventDefault();

    // update active class
    document
      .querySelectorAll(".nav-link")
      .forEach((l) => l.classList.remove("active"));
    this.classList.add("active");

    // get page
    const page = this.dataset.page;

    // update title
    document.getElementById("page-title").textContent =
      page.charAt(0).toUpperCase() + page.slice(1);

    // load page via fetch
    fetch(`pages/${page}.php`)
      .then((res) => res.text())
      .then((html) => {
        document.getElementById("content").innerHTML = html;
        if (page === "dashboard") loadChart();
      });
  });
});

function loadChart() {
  if (!window.Chart) return;
  const ctx = document.getElementById("salesChart");
  if (ctx) {
    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May"],
        datasets: [
          {
            label: "Transaksi",
            data: [12, 19, 14, 20, 22],
            backgroundColor: "#fdcf33",
            borderColor: "#130f40",
            borderWidth: 1,
          },
        ],
      },
      options: {
        scales: {
          y: { beginAtZero: true },
        },
      },
    });
  }
}

// Load Chart.js dari CDN
const script = document.createElement("script");
script.src = "https://cdn.jsdelivr.net/npm/chart.js";
script.onload = loadChart;
document.body.appendChild(script);
