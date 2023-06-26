<?php

include('connection/connect.php');

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['fullname'])) {
}


require_once 'config.php';

if (isset($_POST['payment'])) {

  try {
    $response = $gateway->purchase(array(
      'amount' => $_POST['amount'],
      'currency' => PAYPAL_CURRENCY,
      'returnUrl' => PAYPAL_RETURN_URL,
      'cancelUrl' => PAYPAL_CANCEL_URL,
    ))->send();

    if ($response->isRedirect()) {
      $response->redirect(); // this will automatically forward the customer
    } else {
      // not successful
      echo $response->getMessage();
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}



// if (isset($_POST['submit'])) {

//   $updateQuery = "UPDATE product_stocks SET Stocks = '$newStocks' WHERE id =  ;
//     if(mysqli_query($con, $updateQuery )){
    
    
    
//     }


// }

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact Bootstrap Template - Index</title>
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

  <div class="container" style="width: 100%;">
    <div class="card" style="width: 100%; padding: 80px;">
      <div class="row">
        <div class="col">
          <div class="card mb-5" style="width: 100%; padding: 50px;">
            <div class="col">
              <p class="text-start">Shipping fee</p>
              <p class="fw-light">Metro Manila: 4 - 7 working days - <b>₱150.00</b></p>

              <?php

              include('../SE/connection/connect.php');
              $User = $_SESSION['fullname'];


              $sql = "SELECT SUM(price) AS total FROM customer_orders WHERE User = '$User'";
              $result = mysqli_query($con, $sql);

              while ($row = mysqli_fetch_assoc($result)) {

                $price = 80;
                $total = $row['total'];

                $totale = $price + $total;

                echo "<p> ₱" . $totale . ".00</p>";
              }

              ?>



            </div>

            <div id="smart-button-container">

              <div class="row">
                <div class="col">
                  <div style="text-align: center;">
                    <div id="paypal-button-container">
                      <form action="charge.php" method="POST">

                        <?php
                        $User = $_SESSION['fullname'];

                        include('connection/connect.php');


                        $sql = "SELECT SUM(price) AS total FROM customer_orders WHERE User = '$User'";
                        $result = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {

                          $price = 80;
                          $total = $row['total'];

                          $totale = $price + $total;

                          echo '

                        
                        <input type="hidden" name="amount" id="amount" value="' . $totale . '">
                        
                        ';
                        }
                        ?>

                        <button type="payment" name="payment" value="Pay now" style="width: 90%; border-radius: 30px;" class="btn btn-dark">Paypal</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <a href="gcash.php"><button type="button" style="width: 90%; border-radius: 30px;" name="wewewewew" class="btn btn-primary mb-2">Pay with Gcash</button></a>
                  <a href="cart.php"><button type="button" style="width: 90%; border-radius: 30px;" class="btn btn-danger">Cash on Delivery</button></a>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col">
                <img src="image\cod.png" style="width: 50px; height:62px;">
                <img src="image\gcash.png" style="width: 40px; height:25px;">
                <img src="image\paypal.png" style="width: 50px; height:50px;">
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="d-grid d-sm-flex justify-content-md-end">
        <a class="btn btn-outline-dark" href="checkout.php" style="width: 20%; height: 40px;" role="button">back</a>
        <a href="cart.php"><button type="submit" name="submit" class="btn btn-dark ms-2" style="width: 200px; height: 40px;" role="button">Proceed</button></a>
      </div>

      </form>

    </div>
  </div>


  <!--FOOTER-->

  <div class="space" style="margin-bottom: 10%" ;></div>

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