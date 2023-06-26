<?php

//main connection file for both admin & front end

use LDAP\Result;

$hostname = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "yoo_naa";  //databases

// Create connection
$con = mysqli_connect($hostname, $username, $password, $dbname); // connecting 
// Check connection

if ($con) {       //checking connection to DB	
  //echo "connection successful";

} else {

  die("Connection failed: " . mysqli_connect_error());
}

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

}

$id = $_GET['updateid'];

$sql = "SELECT * FROM customer_orders WHERE id=$id";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$name = $row['User'];
$product_name = $row['product_name'];
$imagedata = $row['imagedata'];
$product_size = $row['product_size'];
$quantity = $row['quantity'];
$price = $row['price'];
$total = $row['total'];
$date_time = $row['date_time'];
$status = $row['status'];
$number = 1;

if (isset($_POST['update'])) {

  $status = $_POST['status'];

  $sql = "UPDATE customer_orders SET id='$id', status='$status'
  where id='$id'";

  $result = mysqli_query($con, $sql);

  $sql1 = "UPDATE customer_order_history SET id='$id', status='$status'
  where id='$id'";
  $result = mysqli_query($con, $sql1);

  if ($result) {

    $status = "Order Completed";

    $delete_query = "DELETE FROM customer_orders WHERE status = '$status'";
    $result_query = mysqli_query($con, $delete_query);

    //echo "Update Successfully";
    header('location: ../admin/admin-orders.php');
  } else {
    die(mysqli_error($con));
  }
}

$number++;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yoo-Naa</title>
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
  <link href="../assets/css/main.css" rel="stylesheet">


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

    .imagesrc img {
      width: 100px;
      height: 100px;
    }

    .centered-row {
      vertical-align: middle;
    }

    .table img {
      width: 100px;
      height: 100px;
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

  <div class="space" style="margin-top: 2%" ;></div>

  <!---YOUR CART-->

  <div class="container">
    <div class="section" style="margin-left: 5%; border-radius:20%; width: 90%; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
      <div class="card" style="width: 100%;">
        <div class="card-body" style="margin-bottom: 100px;">
          <form action="" method="POST">
            <h2>ORDER STATUS</h2>
            <h6>YOO-NAA</h6>
            <h6>yoonaafashion@gmail.com</h6>
            <h6>Manila, Philippines</h6>


            <table class="table" style="width: 90%; margin:0 auto;">
              <t>
                <th> BILL TO </th>
                <th> SHIP TO </th>
                <th> MOP </th>

              </t>
              <tr class="centered-row">
                <th><?php echo $name; ?></th>
                <td>
                  <?php
                  include_once('../admin/connect.php');

                  $User = $_SESSION['fullname'];
                  $sql = "SELECT * FROM customer_details ORDER BY id DESC LIMIT 1";
                  $result = mysqli_query($con, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {

                    $address = $row['address'];
                    $payment = $row['payment'];

                    echo $address;

                  } 
                  	  
                  ?> 
                </td>
                <td><?php echo $payment; ?></td>


              </tr>


            </table>
            <table class="table" style="width: 100%; margin:5% auto;">
              <t>
                <th> Name </th>

                <th> Product</th>
                <th> </th>
                <th> Total </th>
                <th> Date/Time </th>
                <th> Status </th>
              </t>
              <tr class="centered-row">
                <th scope="row"><?php echo $name; ?></th>
                <td><img src="<?php echo $imagedata; ?>"></td>
                <td><?php echo $product_name; ?> <br>
                  <?php echo $price; ?><br>
                  <?php echo $quantity; ?></td>
                <td><?php echo $total; ?></td>
                <td><?php echo $date_time; ?></td>
                <td>
                  <select class="form-select" name="status" aria-label="Default select example">
                    <option selected style="font-size: 0px;"><?php echo $status ?></option>
                    <option value="Pending">Pending</option>
                    <option value="Order Accept">Order Accept</option>
                    <option value="In Transit">In Transit</option>
                    <option value="Order Completed">Order Completed</option>
                    <option value="Cancelled">Cancelled</option>
                  </select>
                </td>
              </tr>
            </table>
            <h6 style="margin: 10% auto 1% auto;">TERMS & CONDITIONS</h6>
            <h6>Please make checks payable to YOO-NAA.</h6>

        </div>
        <div class="modal-footer" style="padding-right: 3%;">
          <button class="btn btn-outline-dark" name="update" style="width: 20%;">Proceed</button>
          <!--<button onclick="window.print()">Print</button>-->
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>



  <div class="div" style="margin-top: 5%;"></div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Yoo-naa</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <!--
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
  -->

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