<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

session_start();
error_reporting(0);
include('connection\connect.php');

function sendemail_verify($fullname, $email, $verify_token)
{
  $mail = new PHPMailer(true);
  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'makiling_adrian@plpasig.edu.ph';                     //SMTP username
  $mail->Password   = 'secret';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port       = 465;

  $mail->setFrom('makiling_adrian@plpasig.edu.ph', $fullname);
  $mail->addAddress($email);

  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'Email verification from yoo-naa';


  $email_template = "
  <h3>You have registered with yoo-naa</h3>
  <h5>Verify your email address to login with thhe below given link</h5>
  <br/><br/>
  <a href='http://localhost/se/regis.php/everification.php?=$verify_token'> Click me </a>
  ";

  $mail->Body = $email_template;
  $mail->send();
  echo 'Message has been sent';
}

if (isset($_POST['submit'])) {

  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $number = $_POST['phone'];
  $password = $_POST['password'];

  if (

    empty($_POST['fullname']) ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['password']) ||
    empty($_POST['cpassword'])

  ) {
    header("refresh:0.1;url=login.php");
  } else {

    $check_fullname = mysqli_query($con, "SELECT email FROM users where email = '" . $_POST['email'] . "' ");
    $check_email = mysqli_query($con, "SELECT password FROM users where password = '" . $_POST['password'] . "' ");

    if ($_POST['password'] != $_POST['cpassword']) {

      echo "<script>alert('Password not match');</script>";
    } elseif (strlen($_POST['password']) < 6) {
      echo "<script>alert('Password Must be >=6');</script>";
    } elseif (strlen($_POST['phone']) < 10) {
      echo "<script>alert('Invalid phone number!');</script>";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      echo "<script>alert('Invalid email address please type a valid email!');</script>";
    } elseif (mysqli_num_rows($check_email) > 0) {
      echo "<script>alert('Email Already exists!');</script>";
    } else {

      $query = "INSERT INTO users (fullname,email,phone,password,verify_token) VALUES ('$fullname','$email','$number', '$password', '$verify_token')";
      $query_run = mysqli_query($con, $query);

      if ($query_run) {

        sendemail_verify("$fullname", "$email", "$verify_token");

        //echo "Data inserted successfully";
        //header("refresh:0.1;url=everification.php");
      } else {

        echo "There was a problem";
      }
    }
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

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/logs.css" rel="stylesheet">

  <!-- OWL-Carousel-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <a class="navbar-brand" href="index.php">
          <img src="image\yoo-naa-logo.png" alt="Bootstrap" width="150" height="70">
        </a>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a tabindex="0" style="color:#a3a3a3" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Please Log in first">Women</a></li>
          <!--products-->
          <li><a href="#onsale">On sale</a></li>
          <li><a href="#">Collection</a></li>

          <li><a><i tabindex="0" style="color:#a3a3a3" class="bi bi-bag-check-fill" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Please Log in first"></i></a></li>
          <li><a href="regis.php"><i class="bi bi-box-arrow-in-right"></i></a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>

  </header><!-- End Header -->
  <!-- End Header -->

  <div class="space" style="margin-top: 20%" ;></div>

  <!--form-->
  <div class="container-fluid">
    <section class="container forms">
      <div class="form login">
        <div class="form-content">
          <?php
          if (isset($_SESSION['status'])) {
          ?>
            <div class="alert alert-success">
              <p class="verify" style="font-size:11px;"><?= $_SESSION['status']; ?></p>
            </div>
          <?php
            unset($_SESSION['status']);
          }
          ?>
          <header>Login</header>
          <form action="select.php" method="POST">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error" style="background-color: #f2dede; color: #A94442; padding: 10px; border-radius: 5px;">
                <?php echo $_GET['error']; ?>
              </p>
            <?php } ?>
            <div class="field input-field">
              <input type="email" name="email" placeholder="Email" autocomplete="off" class="input">
            </div>
            <div class="field input-field">
              <input type="password" placeholder="Password" name="password" autocomplete="off" class="password">
              <i class='bx bx-hide eye-icon'></i>
            </div>
            <div class="field button-field">
              <button type="save" name="save">Sign in</button>
            </div>
          </form>

          <div class="form-link">
            <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
          </div>
        </div>
      </div>


      <div class="form signup">
        <div class="form-content">
          <header>Signup</header>
          <form action="email.php" method="POST">
            <div class="field input-field">
              <input class="form-check-input" placeholder="Full name" autocomplete="off" type="text" name="fullname" id="validationFormCheck1" required>
            </div>
            <div class="field input-field">
              <input class="form-check-input" type="email" placeholder="Email" name="email" autocomplete="off" id="validationFormCheck1" required>
            </div>
            <div class="field input-field">
              <input class="form-check-input" type="text" placeholder="Phone number" autocomplete="off" name="phone" id="validationFormCheck1" required>
            </div>
            <div class="field input-field">
              <input class="form-check-input" type="password" placeholder="Create password" autocomplete="off" name="password" id="validationFormCheck1" required>
            </div>

            <div class="field input-field">
              <input type="password" placeholder="Confirm password" autocomplete="off" name="cpassword" id="validationFormCheck1" required>
              <i class='bx bx-hide eye-icon'></i>
            </div>

            <div class="field button-field">
              <button type="submit" name="submit">Sign up</button>
            </div>
          </form>

          <div class="form-link">
            <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
          </div>
        </div>
      </div>

    </section>
  </div>

  <script src="js\logjava.js"></script>

  <div class="space" style="margin-bottom: 20%" ;></div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>YOO-NAA </span>
          </a>
          <p>Aims to be the best online shopping experience that approaches to meet customers even if they are on mobile, online, and social media by offering a variety of content streams within the Yoo-Naa platform website.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Our Products</a></li>
            <li><a href="#">Collection</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Team</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            2151, C raymundo <br>
            Pasig City<br>
            Manila Philippines <br><br>
            <strong>Phone:</strong> +639 165 1217<br>
            <strong>Email:</strong> yoonaafashion@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Yoo-naa</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

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

  <script>
    //Example: Enable popovers everywhere
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
    })

    //Example: Using the container option
    var popover = new bootstrap.Popover(document.querySelector('.example-popover'), {
      container: 'body'
    })
  </script>

</body>

</html>