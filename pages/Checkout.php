<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout - CarTukar</title>
    <!-- My Style -->
    <link rel="stylesheet" href="Checkout.css" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    />
  </head>
  <body>
    <!-- Header Section Start -->
    <header class="header">
      <div id="menu-btn" class="fas fa-bars"></div>
      <a href="Carsome.html" class="logo"><span>Car</span>Tukar </a>
      <!-- Nav Bar Start -->
      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#vehicles">vehicles</a>
        <a href="#services">services</a>
        <a href="#featured">featured</a>
        <a href="#reviews">reviews</a>
        <a href="#contact">contact</a>
        <div class="dropdown">
          <a href="#" id="about-link">About CarTukar</a>
          <i class="fas fa-chevron-down"></i>
          <!-- Font Awesome arrow icon -->
          <div class="dropdown-menu">
            <a href="ourstory.html">About Us</a>
            <a href="lokasikami.html">Our Location</a>
            <a href="FAQ.html">FAQ</a>
            <a href="lokasikami.html">Contact Us</a>
            <a href="News.html">News</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="#" id="about-link">Sell Car</a>
          <i class="fas fa-chevron-down"></i>
          <!-- Font Awesome arrow icon -->
          <div class="dropdown-menu">
            <a href="Jual.html">Sell Car</a>
            <a href="Tukar.html">Trade-in</a>
            <a href="Belibekas.html">used cars</a>
            <a href="Certified.html">Certified</a>
          </div>
        </div>
      </nav>
      <div id="login-btn">
        <button class="btn">Login</button>
        <i class="far fa-user"></i>
      </div>
    </header>
    <!-- Nav Bar End -->
    <!-- Header Section End -->

    <!-- Login Form -->
    <div class="login-form-container">
      <span class="fas fa-times" id="close-login-form"></span>
      <form action="">
        <h3>User Login</h3>
        <input type="email" placeholder="Email" class="box" />
        <input type="password" placeholder="Password" class="box" />
        <p>Forget your password? <a href="#">Click here</a></p>
        <input type="submit" value="login now" class="btn" />
        <p>or login with</p>
        <div class="buttons">
          <a href="#" class="btn">google</a>
          <a href="#" class="btn">facebook</a>
        </div>
        <p>
          Don't have an account? <a href="RegistrasiCartukar.html">Sign up</a>
        </p>
      </form>
    </div>
    <!-- Login End -->
    <!-- Checkout Section Start -->
    <section class="checkout">
      <h1 class="heading">Checkout</h1>
      <div class="container">
        <div class="checkout-content">
          <!-- Order Summary -->
          <div class="order-summary">
            <h2>Order Summary</h2>
            <div class="summary-details">
              <div class="car-details">
                <img src="Civic.png" alt="Car Image" />
                <div class="car-info">
                  <h3>Civic Turbo</h3>
                  <p>Year: 2020</p>
                  <p>Mileage: 30,000 km</p>
                  <p>Price: Rp 200,000,000</p>
                </div>
              </div>
              <div class="price-breakdown">
                <div class="price-item">
                  <span>Sub</span>
                  <span>Rp 200,000,000</span>
                </div>
                <div class="price-item">
                  <span>Shipping</span>
                  <span>Rp 500,000</span>
                </div>
                <div class="price-item">
                  <span>Discount</span>
                  <span>- Rp 50,000</span>
                </div>
                <div class="price-item total">
                  <span>Total</span>
                  <span>Rp 200,450,000</span>
                </div>
              </div>
            </div>
            <div class="discount-code">
              <input type="text" placeholder="Enter Discount Code" />
              <button class="btn"><i class="fas fa-tag"></i> Apply</button>
            </div>
          </div>

          <!-- Payment & Shipping Details -->
          <div class="payment-shipping">
            <!-- Shipping Details -->
            <div class="shipping-details">
              <h2>Shipping Details</h2>
              <form action="#" method="post">
                <div class="form-group">
                  <label for="full-name"
                    ><i class="fas fa-user"></i> Full Name</label
                  >
                  <input
                    type="text"
                    id="full-name"
                    name="full-name"
                    placeholder="John Doe"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="address"
                    ><i class="fas fa-map-marker-alt"></i> Address</label
                  >
                  <input
                    type="text"
                    id="address"
                    name="address"
                    placeholder="123 Main St, Jakarta"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="city"><i class="fas fa-city"></i> City</label>
                  <input
                    type="text"
                    id="city"
                    name="city"
                    placeholder="Jakarta"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="postal-code"
                    ><i class="fas fa-envelope"></i> Postal Code</label
                  >
                  <input
                    type="text"
                    id="postal-code"
                    name="postal-code"
                    placeholder="12345"
                    required
                  />
                </div>
              </form>
            </div>

            <!-- Payment Details -->
            <div class="payment-details">
              <h2>Payment Details</h2>
              <form action="#" method="post">
                <div class="form-group">
                  <label for="card-number"
                    ><i class="fas fa-credit-card"></i> Card Number</label
                  >
                  <input
                    type="text"
                    id="card-number"
                    name="card-number"
                    placeholder="1234 5678 9012 3456"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="card-expiration"
                    ><i class="fas fa-calendar-alt"></i> Card Expiration</label
                  >
                  <input
                    type="text"
                    id="card-expiration"
                    name="card-expiration"
                    placeholder="MM/YYYY"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="card-cvv"
                    ><i class="fas fa-lock"></i> Card CVV</label
                  >
                  <input
                    type="text"
                    id="card-cvv"
                    name="card-cvv"
                    placeholder="123"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="payment-method"
                    ><i class="fas fa-wallet"></i> Payment Method</label
                  >
                  <select id="payment-method" name="payment-method" required>
                    <option value="">Select Payment Method</option>
                    <option value="credit-card">Credit Card</option>
                    <option value="bank-transfer">Bank Transfer</option>
                  </select>
                </div>
                <button type="submit" class="btn">
                  <i class="fas fa-check"></i> Pay Now
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Checkout Section End -->
    <!-- Notifikasi -->
    <div id="thank-you-notification" class="notification" style="display: none">
      <p>Terimakasih sudah mempercayai CarTukar!</p>
    </div>
    <script>
      document
        .getElementById("payment-form")
        .addEventListener("submit", function (e) {
          e.preventDefault(); // Mencegah form submit

          // Ambil data dari form
          const fullName = document.getElementById("full-name").value;
          const cardNumber = document.getElementById("card-number").value;
          const cardExpiration =
            document.getElementById("card-expiration").value;
          const cardCvv = document.getElementById("card-cvv").value;
          const totalAmount = "Rp 200,450,000"; // Total amount dari order summary

          // Tampilkan data di bukti pembayaran
          document.getElementById("receipt-name").textContent = fullName;
          document.getElementById("receipt-card-number").textContent =
            cardNumber;
          document.getElementById("receipt-card-expiration").textContent =
            cardExpiration;
          document.getElementById("receipt-card-cvv").textContent = cardCvv;
          document.getElementById("receipt-total-amount").textContent =
            totalAmount;

          // Tampilkan bukti pembayaran
          document.getElementById("payment-receipt").style.display = "block";

          // Tampilkan notifikasi
          const notification = document.getElementById(
            "thank-you-notification"
          );
          notification.style.display = "block";

          // Sembunyikan notifikasi setelah 3 detik
          setTimeout(() => {
            notification.style.display = "none";
          }, 3000); // 3000 milidetik = 3 detik
        });
    </script>
  </body>
</html>
