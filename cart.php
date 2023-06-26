<?php
include_once('../SE/connection/connect.php');

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['fullname'])){

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yoo-Naa Fashion Design Store</title>
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
  <link href="responsive.css" rel="stylesheet">

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

    .nav button {
      color: black;
    }

    .nav button:hover {
      color: red;
    }

    .card {
      height: 500px;
    }

    .imagesrc img {
      width: 100px;
      height: 100px;
    }

    .centered-row {
      vertical-align: middle;
    }

    .quantity-input {
      display: flex;
      align-items: center;
    }

    .quantity-btn {
      background-color: #eee;
      border: none;
      padding: 8px 12px;
      font-size: 16px;
      cursor: pointer;
    }

    .quantity-field {
      width: 50px;
      text-align: center;
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

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="home.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <a class="navbar-brand" href="home.php">
          <img src="image\yoo-naa-logo.png" alt="Bootstrap" width="150" height="70">
        </a>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="women.php">Women</a></li>
          <!--products-->
          <li><a href="#onsale">On sale</a></li>
          <li><a href="#">Collection</a></li>

          <li><a href="cart.php"><i class="bi bi-bag-check-fill"></i></a></li>
          <li><a href="regis.php"><i class="bi bi-box-arrow-in-right"></i></a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <div class="space" style="margin-top: 5%" ;></div>

  <!---YOUR CART-->

  <div class="container">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Cart</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Tracking Order</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Your Order History</button>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="card mt-5">
          <div class="card-body">
            <table class="table" style="width: 100%; margin:0 auto; padding: 20%;">
              <thead class="table">
                <t>
                  <th> Order Number </th>
                  <th> </th>
                  <th> </th>
                  <th> Quantity </th>
                  <th> Price</th>
                  <th> </th>
                </t>
              </thead>


              <?php

              //2
              $User = $_SESSION['fullname'];

              //3
              $sql = "SELECT * FROM customer_cart WHERE User = '$User' AND Status = '' ORDER BY id DESC";
              $result = mysqli_query($con, $sql);
              $number = 1;

              if ($result->num_rows > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];

                  $order_number = $row['order_number'];
                  $imagedata = $row['imagedata'];
                  $product_name = $row['product_name'];
                  $price = $row['price'];
                  $date_time = $row['date_time'];


                  echo '<tr class="centered-row">
              <th scope="row">' . $order_number . '</th>
              <td>
              <div class="imagesrc">
              <img src="' . $row['imagedata'] . '"/>   
              </div>
              </td>
              <td>' . $product_name . ' <br>
             
              </td>
              <td> 

              
                <div class="quantity-input">
                  <button type="button" class="quantity-btn" name="decrement" onclick="decrement()">-</button>
                    <input type="number" class="quantity-field" name="quantity"  id="quantity" value="1">
                  <button type="button" class="quantity-btn" name="increment" onclick="increment()">+</button>
                </div>
           
              
              </td>
              <td><span id="price"> ₱' . $price . '.00</span></td>
              <td>

                <a href="delete.php? deleteid=' . $id . '"><i class="fa-solid fa-trash" style="color:red;"></i></a> &nbsp;&nbsp;&nbsp;
              </td>
            </tr>';
                  $number++;
                }
              } else {

                echo " <br> &nbsp;&nbsp;&nbsp;&nbsp; You dont have an order yet! </br> ";
                echo " <br> </br> ";
              }


              ?>

            </table>

            <div class="space" style="margin-bottom: 15%" ;></div>

            <!--total-->

            <?php
            include('../SE/connection/connect.php');

            $sql = "SELECT SUM(price) AS total_sum FROM customer_cart";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $totalSum = $row['total_sum'];

              echo '<p class="text mt-4" style="font-weight: bolder; margin-left: 67.5%;">TOTAL: <span id="total" name="total"> ₱' . $totalSum . '.00 </span></p>';
            } else {

              echo "no result found";
            }


            ?>

            <div class="row-auto mt-5">
              <div class="col-auto" id="buto">
                <div class="d-grid d-sm-flex justify-content-md-end" style="">
                  <a class="btn btn-dark" href="checkout.php" name="checkout" style="width: 20%;" role="button">Checkout</a>
                  <a class="btn btn-outline-dark ms-3" href="women.php" style="width: 20%;" role="button">Continue Shopping</a>
                </div>
              </div>
            </div>



          </div>
        </div>

      </div>

      <?php

      include_once('../SE/connection/connect.php');

      //delete query
      $User = $_SESSION['fullname'];

      $selectQuery = "SELECT * FROM customer_orders WHERE User = '$User' ORDER BY id DESC";
      $result = $con->query($selectQuery);

      if ($result->num_rows > 0) {

        $status = "Order Completed";

        $delete_query = "DELETE FROM customer_orders WHERE status = '$status'";
        $result_query = mysqli_query($con, $delete_query);

        if ($result_query === TRUE) {

          while ($row = $result->fetch_assoc()) {

            $id = $row['id'];
            $User = $row['User'];
            $order_number = $row['order_number'];
            $imagedata = $row['imagedata'];
            $product_name = $row['product_name'];
            $product_size = $row['product_size'];
            $quantity = $row['quantity'];
            $price = $row['price'];
            $total = $row['total'];
            $date_time = $row['date_time'];
            $status = $row['status'];

            $insertQuery = "INSERT INTO customer_order_history (id, User, order_number, imagedata, product_name, product_size, quantity, price, total, date_time, status) VALUES ('$id', '$User','$order_number','$imagedata','$product_name','$product_size', '$quantity','$price','$total','$date_time','$status')";
            $con->query($insertQuery);
          }
          // echo "INSERTED SUCCESFULLY";
        } else {
          //echo "no data to transfer";
        }
      } //$con->close();
      ?>

      <!--tracking-->
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="card mt-5">
          <div class="card-body">
            <table class="table" style="width: 100%; margin:0 auto; padding: 20%;">
              <thead class="table">
                <t>

                  <th> Order Number </th>
                  <th> </th>
                  <th> </th>
                  <th> Total</th>
                  <th> </th>
                  <th> Status </th>
                </t>
              </thead>

              <?php

             
              $User = $_SESSION['fullname'];

              $sql = "SELECT * FROM customer_orders WHERE User = '$User' AND status != '' ORDER BY id DESC";
              $result = mysqli_query($con, $sql);
              $number = 1;

              if ($result->num_rows > 0) {

                while ($row = mysqli_fetch_assoc($result)) {


                  $id = $row['id'];
                  $order_number = $row['order_number'];
                  $imagedata = $row['imagedata'];
                  $product_name = $row['product_name'];
                  $prod_size = $row['product_size'];
                  $quantity = $row['quantity'];
                  $total = $row['total'];
                  $price = $row['price'];
                  $date_time = $row['date_time'];
                  $status = $row['status'];

                  $totale = $total + 150;
                  


                  echo ' <tr class="centered-row">
                  <th scope="row">' . $order_number . '</td>
                  <td> <div class="imagesrc">
                  <img src="' . $row['imagedata'] . '"/>   
                  </div></td>
                  <td><b>' . $product_name . '</b> <br>
                  ₱' . $price . '.00<br>
                      ' . $quantity . '</td>
                  <td> ₱' . $totale . '.00</td>
                  <td>' . $date_time . '</td>
                  <td>

                  <button type="" class="btn btn-outline-success">' . $status . '</button>
                  </td>
            </tr>';
                  $number++;
                }
                if ($result = "pending") {

                  echo '<p class="alert" id="alert" Your package is waiting to accept by the admin! </p>';
                } else if ($result === "intransit") {

                  echo '<p class="alert" id="alert" waiting for the courier to deliver! </p>';
                }
              } else {

                echo '<p class="alert" id= "alert"> You dont have an order yet! </p>';
              }

              ?>

            </table>

            <div class="space" style="margin-bottom: 15%" ;></div>

            </form>


          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <div class="card mt-5">
          <div class="card-body">
            <table class="table" style="width: 100%; margin:0 auto; padding: 20%;">
              <thead class="table">
                <t>
                  <th> Order Number </th>
                  <th> </th>
                  <th> </th>
                  <th> Total</th>
                  <th> </th>
                </t>
              </thead>

              <?php

              $User = $_SESSION['fullname'];
              $status = "Order Completed";

              //$sql = "SELECT * FROM customer_orders WHERE User = '$User' AND status == 'Order Completed'";
              $sql = "SELECT * FROM customer_order_history WHERE User = '$User' AND status = '$status' ORDER BY id DESC";
              $result = mysqli_query($con, $sql);

              if ($result->num_rows > 0) {

                while ($row = mysqli_fetch_assoc($result)) {

                  $id = $row['id'];
                  $User = $row['User'];
                  $order_number = $row['order_number'];
                  $imagedata = $row['imagedata'];
                  $product_name = $row['product_name'];
                  $prod_size = $row['product_size'];
                  $quantity = $row['quantity'];
                  $price = $row['price'];
                  $total = $row['total'];
                  $date_time = $row['date_time'];
                  $status = $row['status'];

                  echo ' <tr class="centered-row">
                  <th scope="row">' . $order_number . '</td>
                  <td> <div class="imagesrc">
                  <img src="' . $row['imagedata'] . '"/>   
                  </div></td>
                  <td>' . $product_name . ' <br>
                  ₱' . $price . '.00<br>
                      ' . $quantity . '</td>
                  <td> ₱' . $total . '.00</td>
                  <td>' . $date_time . '</td>
            </tr>';
                  $number++;
                }
              } else {
              }

              ?>

            </table>

            <div class="space" style="margin-bottom: 15%" ;></div>

            </form>


          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="space" style="margin-bottom: 10%" ;></div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="home.php" class="logo d-flex align-items-center">
            <span>Yoo-Naa</span>
          </a>
          <p>Is a worldwide fashion and lifestyle e-retailer dedicated to bringing the beauty of fashion to everyone. </p>
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


  <script>
    function increment() {
      var quantityInput = document.getElementById("quantity");
      var quantity = parseInt(quantityInput.value);
      quantityInput.value = quantity + 1;
      updateTotal();
    }

    function decrement() {
      var quantityInput = document.getElementById("quantity");
      var quantity = parseInt(quantityInput.value);
      if (quantity > 1) {
        quantityInput.value = quantity - 1;
        updateTotal();
      }
    }

    function updateTotal() {
      var quantity = parseInt(document.getElementById("quantity").value);

      var price = parseInt(document.getElementById("quantity").value);

      if (price = 159) {

        var total = quantity * price;
        document.getElementById("total").textContent = total;

      }
      if (price = 149) {

        var total = quantity * price;
        document.getElementById("total").textContent = total;

      }
      if (price = 299) {

        var total = quantity * price;
        document.getElementById("total").textContent = total;
      }

      //var pricePerItem = 159; // Replace with your actual price per item
      //var total = quantity * pricePerItem;
      //document.getElementById("total").textContent = total;

    }
  </script>

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

  <!--
  <script type="text/javascript">
    /*function openNewTab() {
      window.open("<?php
                    $curl = curl_init();
                    $total = $item["total"];
                    curl_setopt_array($curl, array(
                      CURLOPT_URL => 'https://g.payx.ph/payment_request',
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => '',
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 0,
                      CURLOPT_FOLLOWLOCATION => true,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => 'POST',
                      CURLOPT_POSTFIELDS => array(
                        'x-public-key' => 'pk_38f53bb0d78ba28feacd5bf8401d3186',
                        'amount' => "$total",
                        'description' => 'Payment for ordered items from cart',
                        'redirectsuccessurl' => 'http://keopicha.epizy.com/checkout-gcash.php'
                      ),
                    ));

                    $response = curl_exec($curl);
                    curl_close($curl);
                    $decode = json_decode($response, true);
                    echo $decode["data"]["checkouturl"];
                    ?>")
    }; */
  </script>-->



</body>

</html>