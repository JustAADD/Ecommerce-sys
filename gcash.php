<?php

include('connection/connect.php');

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['fullname'])) {
}


// $User = $_SESSION['fullname'];

// $sql = "SELECT * FROM customer_orders WHERE User = '$User'";
// $result = mysqli_query($con, $sql);

// if ($result->num_rows > 0) {
//   while ($row = mysqli_fetch_assoc($result)) {
//     $User = $_SESSION['fullname'];
//     $quantity = $row['quantity'];
//     $srp = $row['srp_price'];
//     $total = ($quantity * $srp);

//     //total including shipping fee
//     $all = (($total * $quantity) + 150);

//     //total converting to USD for Paypal
//     $usd = ($all / 54.80);
//     $rounded_number = round($usd, 2);
//   }
// }
?>

<?php

$User = $_SESSION['fullname'];

$sql = "SELECT * FROM customer_cart WHERE User = '$User'";
$result = mysqli_query($con, $sql);
$number = 1;

if ($result->num_rows > 0) {

  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];

    $prod_name = $row['prod_name'];
    $prod_size = $row['prod_size'];
    $quantity = $row['quantity'];
    $srp_price = $row['srp_price'];
    //4
    $total = $quantity * $srp_price;
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gcash Payment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="image\yoo-naa-logo.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- OWL-Carousel-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    .navbar a {
      text-decoration: none;
    }

    .footer a {
      text-decoration: none;
    }
  </style>



</head>


<body>






  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">yoonaafashion@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+639 165 1217</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->


  <div class="space" style="margin-top: 5%" ;></div>

  <!---YOUR CART-->

  <div class="titleHeading" id="titleHeading">
    <p class="text-center"></p>
  </div>
  <div class="container">
    <div class="position-absolute top-50 start-50 translate-middle">

      <form action="pay_response.php" method="POST" id="upload-form">
        <div class="card mb-3" style="padding: 10%;">
          <div class="row g-0">
            <div class="col-md-4">
              <div class="text-center">
                <h6 class="fw-bold">
                  Scan the QR code <br>
                  09201691687
                </h6>
              </div>
              <img src="image\gcashpayment.jpg" class="img-fluid rounded-start me-5" width="600" alt="...">
            </div>

            <div class="col-md-8">
              <form action="pay_response.php">

                <div class="p-2">

                  <?php
                  include('../SE/connection/connect.php');

                  $User = $_SESSION['fullname'];

                  $sql = "SELECT SUM(price) AS total FROM customer_orders WHERE User = '$User'";
                  $result = mysqli_query($con, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {

                    $price = 80;
                    $total = $row['total'];



                    $totale = $price + $total;

                    //echo "<p> ₱" . $totale . ".00</p>";
                  }
                  ?>
                  <h4 class="fw-bold">Amount to Pay: ₱<?php echo $totale ?></h4>

                  <?php
                  include('../SE/connection/connect.php');

                  $User = $_SESSION['fullname'];

                  $sqlquery = "SELECT * FROM customer_orders WHERE User = '$User'";
                  $result = mysqli_query($con, $sqlquery);

                  while ($row = mysqli_fetch_assoc($result)) {

                    $order_number = $row['order_number'];
                    //echo "<p> ₱" . $totale . ".00</p>";
                  }
                  ?>
                  <p>ORDER: <?php echo $order_number ?></p>


                  <label class="form-label fw-bold">Screenshot of Payment</label></label>
                  <input name="proof" type="file" accept=".jpg, .jpeg, .png, .webp" class="form-control shadow-none" required>

                  <input name="order_id" type="text" value="$ORDER_ID" class="form-control shadow-none" hidden required>
                  <input name="amount" type="text" value="$TXN_AMOUNT" class="form-control shadow-none" hidden required>

                  <div class="mb-2">
                    <div class="form-check mt-3">
                      <input class="form-check-input" type="checkbox" onchange="verifyAnswer()" id="myCheck">
                      <label class="form-check-label" for="flexCheckDefault">
                        <i>I paid the Said Amount</i>
                      </label>
                    </div>
                  </div>

                </div>
              </form>
              <a href="cart.php"></a><button type="submit" name="pay_now2" id="confirmbutton" class="btn btn-success w-100 shadow-none mb-1" disabled>Confirm</button></a>

            </div>
          </div>
        </div>
    </div>
    </form>
  </div>
  </div>



  <div class="space" style="margin-bottom: 40%" ;></div>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <div class="footer">
    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Yoo-naa</span></strong>. All Rights Reserved
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>


</html>