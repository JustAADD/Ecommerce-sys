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

$sql = "SELECT * FROM product_stocks WHERE id=$id";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$product_id = $row['product_id'];
$Product = $row['product'];
$imagedata = $row['imagedata'];
$Price = $row['price'];
$Stocks = $row['Stocks'];
$date = $row['date'];
$number = 1;

if (isset($_POST['update'])) {

  $Stocks = $_POST['Stocks'];
  $Price = $_POST['price'];

  $sql = "UPDATE product_stocks SET id='$id', price='$Price' , Stocks = '$Stocks'
  where id='$id'";

  $result = mysqli_query($con, $sql);
  if ($result) {

    //echo "Update Successfully";
    header('location: ../admin/admin-blog.php');
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
      height: 100px;
      width: 100px;
    }

    .centered-row {
      vertical-align: middle;
    }

    .price {
      width: 100px;
    }

    .form-select {
      width: 100px;
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
            <h2>Edit Stock</h2>
            <h6>YOO-NAA</h6>
            <h6>yoonaafashion@gmail.com</h6>
            <h6>Manila, Philippines</h6>

            <table class="table" style="width: 100%; margin:5% auto;">
              <t>
                <th> Product ID </th>
                <th> Product Image </th>
                <th> Product Name</th>
                <th> Price</th>
                <th> Stocks</th>
                <th> Date Created</th>

              </t>
              <tr class="centered-row">
                <th scope="row"><?php echo $product_id; ?></th>
                <td>
                  <div class="imagesrc" name="imagedata" style="height:100px; width:100px;">
                    <?php echo '  <img src="' . $row['imagedata']  . '"/>'; ?>
                  </div>
                </td>
                <td><?php echo $Product; ?></td>
                <td>
                  <div class="price">
                    <input type="text" name="price" class="form-control" value=" <?php echo $Price; ?>">
                  </div>
                </td>
                <td><select class="form-select" name="Stocks" aria-label="Default select example">
                    <option selected style="font-size: 0px;"> <?php echo $Stocks ?> </option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="Out of Stocks">Out of Stocks</option>
                  </select></td>
                <td><?php echo $date; ?></td>
              </tr>
            </table>

        </div>
        <div class="modal-footer" style="padding-right: 3%;">
          <button class="btn btn-outline-dark" name="update" value="update" style="width: 20%;">Proceed</button>
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