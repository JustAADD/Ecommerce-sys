<?php
include('connection/connect.php');

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['fullname'])) {
  
}


if (isset($_POST['submit'])) {

  $sql = "SELECT * FROM customer_cart";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      //cart_earings
      //customer_cart
      $id = $row['id'];
      $User = $row['User'];
      $imagedata = $row['imagedata'];
      $product_name = $row['product_name'];
      $price = $row['price'];
      $size = $row['size'];
      $quantity = $row['quantity'];
      $total = $row['total'];
      //$total = "299";

      function generateProductID()
      {
        $prefix = 'Ord-'; // Set the prefix for the product ID
        $unique_id = uniqid(); // Generate a unique ID based on the current time in microseconds
        $product_id = $prefix . $unique_id; // Combine the prefix and unique ID to create the product ID
        return $product_id; // Return the product ID
      }

      $order_number = generateProductID();

      $status = "pending";

      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $query = "INSERT INTO customer_orders (id, User, order_number, imagedata, product_name, product_size, quantity, price, total, date_time, status) VALUES ('$id','$User','$order_number','$imagedata','$product_name','$size','$quantity','$price','$total','$date_time','$status')";
      $con->query($query);

      if ($con) {
        //echo "inserted successfully";
        $sql1 = "DELETE FROM customer_cart";
        $con->query($sql1);

        if ($con) {

          // $querySelect = "SELECT * FROM product_stocks";
          // $resultSelect = $con->query($querySelect);

          // if ($resultSelect->num_rows > 0) {

          //   while ($row = $resultSelect->fetch_assoc()) { 

          //     $User = $_SESSION['fullname'];

          //     $product_id = $row['product_id'];
          //     $stocks = $row['Stocks'];

          //     $newStocks = $stocks - $quantity;

          //     $updateQuery = "UPDATE product_stocks SET Stocks = '$newStocks' WHERE id IN (SELECT id FROM customer_orders)";

          //     if (mysqli_query($con, $updateQuery)) {

          //       header("refresh:0.1;url=payment_process.php");
          //     }
          //   }

            header("refresh:0.1;url=payment_process.php");
           
          } else {
            echo "There's a problem";
          }
        } else {

          echo "There's a problem";
        }
      
    }

    $result->close();
  }

  //customer information
  $cus_name = $_POST['cus_name'];
  $cus_address = $_POST['cus_address'];
  $cus_email = $_POST['cus_email'];
  $contact = $_POST['contact'];
  $payment = $_POST['payment'];
  $date = DATE('Y-m-d h:i:sa');

  $query = "INSERT INTO customer_details (User,address,email,contact,payment,date_time) VALUES ('$cus_name','$cus_address','$cus_email','$contact','$payment','$date')";
  $query_run = mysqli_query($con, $query) or die(mysqli_error($con));

  if ($query_run == 1) {

    $query = "DELETE FROM customer_cart";

    if ($query_run = mysqli_query($con, $query)) {

      header("refresh:0.1;url=payment_process.php");
    } else {
      echo "Error deleting record: " . mysqli_error($con);
    }
  }
}


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
    <div class="card" style="width: 100%; padding: 15px;">
      <form action="checkout.php" method="POST">
        <div class="row">
          <div class="col">

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Full Name</label>
              <input type="fullname" class="form-control" name="cus_name" placeholder="Full name" autocomplete="off" id="validationFormCheck1" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Delivery Address</label>
              <input type="delivery" class="form-control" name="cus_address" placeholder="Delivery Address" autocomplete="off" id="validationFormCheck1" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="cus_email" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Contact</label>
              <input type="contact" class="form-control" name="contact" placeholder="Contact" autocomplete="off" id="validationFormCheck1" required>
              <div id="validationFormCheck1" class="form-text">We'll never share your contact with anyone else.</div>
            </div>
            <div class="mb-4 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Save this information for next time</label>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 100%; padding: 15px;">
              <div class="col">
                <p class="text-start">Shipping fee</p>
                <p class="fw-light">Metro Manila: 4 - 7 working days - <b>₱150.00</b></p>

                <?php

                include('../SE/connection/connect.php');

                $User = $_SESSION['fullname'];

                $sql = "SELECT SUM(price) AS total FROM customer_cart WHERE User = '$User'";
                $result = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($result)) {

                  $price = 80;
                  $total = $row['total'];

                  $totale = $price + $total;

                  echo "<p> ₱" . $totale . ".00</p>";
                }

                ?>


                <input type="hidden" name="shipping" value="">
              </div>
              <select class="form-select mb-2" name="payment" id="payment" aria-label="Default select example" required>
                <option selected>Choose your Payment Method</option>
                <option value="COD" style="color: red;">CASH ON DELIVERY</option>
                <option value="GCASH" style="color: blue;">GCASH</option>
                <option value="PAYPAL" style="color: green;">PAYPAL</option>
              </select>

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
          <a class="btn btn-outline-dark" href="cart.php" style="width: 20%; height: 40px;" role="button">back</a>
          <button type="submit" class="btn btn-dark ms-2" name="submit" id="submit" style="width: 20%; height: 40px;" role="button">Proceed</button>
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