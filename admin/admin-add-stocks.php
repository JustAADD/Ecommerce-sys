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
?>

<?php
// check if the form has been submitted
if (isset($_POST['update'])) {

  $text = $_POST["text"];
  $price = $_POST["price"];
  $stocks = $_POST["stocks"];

  $date = new DateTime('now', new DateTimeZone('UTC'));
  $date->setTimezone(new DateTimeZone('Asia/Manila'));
  $date_time = date("Y-m-d h:i:s A");
  //$date_string = $date->format('Y-m-d g:i A');
  // specify the directory where the image will be stored

  $target_dir = "imagedata/";

  // specify the path to the image file
  $target_file = $target_dir . basename($_FILES["image"]["name"]);

  // move the uploaded file to the target directory
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    // display a success message if the file was uploaded successfully
    // echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";

    header("refresh:0.1;url=admin-blog.php");

    function generateProductID()
    {
      $prefix = 'PRD-'; // Set the prefix for the product ID
      $unique_id = uniqid(); // Generate a unique ID based on the current time in microseconds
      $product_id = $prefix . $unique_id; // Combine the prefix and unique ID to create the product ID
      return $product_id; // Return the product ID
    }
    
    $product_id = generateProductID();

    $stmt = $con->prepare("INSERT INTO product_stocks (product_id,product,imagedata, price, stocks, date) VALUES (?, ?, ?, ?, ?, ?) ");
    $stmt->bind_param("ssssss", $product_id, $text, $target_file, $price, $stocks, $date_time);
    $stmt->execute();
    $con->close();
    //$query = "INSERT INTO product_stocks (product_id,product,imagedata, stocks,date) VALUES ('$product_id','$text','$target_file','$stocks','$date_string')";

    // $values = [$target_file];
    //mysqli_query($con, $query);
  } else {
    // display an error message if the file could not be uploaded
    echo "Sorry, there was an error uploading your file.";
  }
}


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

          <form action="../admin/admin-add-stocks.php" method="POST" enctype="multipart/form-data">
            <h2>ADD STOCKS</h2>
            <h6>YOO-NAA</h6>
            <h6>yoonaafashion@gmail.com</h6>
            <h6>Manila, Philippines</h6>


            <div class="stocks" style="width:500px; margin:0 auto; padding:2%;">

              <div class="mb-3">
                <label for="exampleInputproduct1" class="form-label">Input Product name</label>
                <input class="form-control" type="text" name="text" id="exampleInputproduct1">
              </div>

              <div class="mb-3">
                <label for="formFile" class="form-label">Product Image</label>
                <input class="form-control" type="file" name="image" id="image">
              </div>
              <div class="price mb-3">
                <label for="formFile" class="form-label">Price ₱</label>
                <input type="text" name="price" class="form-control">
              </div>
              <label for="exampleFormControlInput2" class="form-label">Stocks</label>
              <select class="form-select" name="stocks" aria-label="Default select example">
                <option selected>Stocks</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
              </select>

            </div>

        </div>
        <div class="modal-footer" style="padding-right: 3%;">
          <button class="btn btn-outline-dark" name="update" value="Upload Image" style="width: 20%;">Proceed</button>
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