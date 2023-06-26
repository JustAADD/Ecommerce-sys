<?php

//main connection file for both admin & front end
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
?>


<?php

if (isset($_GET['deleteid'])) {
  $id = $_GET['deleteid'];

  $query = "DELETE FROM customer_orders WHERE id='$id'";
  $query_run = mysqli_query($con, $query);
  if ($query_run) {
  } else {
    die(mysqli_error($con));
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="shorcut icon" style="width: 150px;" href="../admin/image/yoo-naa-logo.png">

  <!--css-->
  <link rel="stylesheet" href="../admin/css/dashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <style>
    .card1 {
      width: 100%;
      height: 254px;
      background: #fff;
      position: relative;
      display: flex;
      place-content: center;
      place-items: center;
      overflow: hidden;
      border-radius: 20px;
    }

    .card1 h2 {
      z-index: 1;
      color: black;
      font-size: 1em;
      padding: 120px;
      text-align: center;
    }

    .card1::before {
      content: '';
      position: absolute;
      width: 100%;
      background-image: linear-gradient(180deg, rgb(0, 183, 255), rgb(255, 48, 255));
      height: 130%;
      animation: rotBGimg 3s linear infinite;
      transition: all 0.2s linear;
    }

    @keyframes rotBGimg {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    .card1::after {
      content: '';
      position: absolute;
      background: #fff;
      ;
      inset: 5px;
      border-radius: 15px;
    }

    .imagesrc img {
      width: 100px;
      height: 100px;
    }

    .centered-row {
      vertical-align: middle;
    }

    .table th {
      font-size: small;
    }

    .centered-row td {
      font-size: small;
    }


    .cardBox {
      position: relative;
      width: 90%;
      padding: 20px;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 30px;
      margin: 0 auto;
    }

    .cardBox .card {
      position: relative;
      background: var(--white);
      padding: 30px;
      border-radius: 20px;
      display: flex;
      justify-content: space-between;
      cursor: pointer;
      box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
      background-color: var(--black1);
    }

    .cardBox .card .numbers {
      position: relative;
      font-weight: 500;
      font-size: 2em;
      color: var(--white);
    }

    .cardBox .card .cardName {
      color: var(--black2);
      font-size: 1em;
      margin-top: 5px;
    }

    .cardBox .card .iconBx {
      font-size: 1.9em;
      color: var(--black2);
    }

    .cardBox .card:hover {
      background: var(--black1);
    }

    .cardBox .card:hover .numbers,
    .cardBox .card:hover .cardName,
    .cardBox .card:hover .iconBx {
      color: var(--white);
    }

    .navigation ul li:hover a,
    .navigation ul li.hovered a {
      color: var(--black1);
    }

    #cerds {
      margin-left: 5%;
      width: 90%;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }

    .header {
      background-color: #333;
      color: #fff;
      padding: 20px;

      font-size: 12px;
      font-weight: lighter;
      font-family: sans-serif;
    }

    .body {
      padding: 20px;
    }

    #con {
      height: 210px;
      margin: 0 auto;
    }
  </style>

</head>

<body>
  <div class="continer">
    <div class="navigation">
      <ul>
        <li>
          <a class="imahe" href="admin-dashboard.php">
            <img src="image\yoo-naa-logo.png" alt="Bootstrap" style="height: 80px; width: 170px; margin-top: 15px;">
          </a>
        </li>
        <li>
          <a href="admin-dashboard.php">
            <span class="icon">
              <ion-icon name="home-outline"></ion-icon>
            </span>
            <span class="title">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="admin-orders.php">
            <span class="icon">
              <ion-icon name="cart-outline"></ion-icon>
            </span>
            <span class="title">Orders</span>
          </a>
        </li>
        <li>
          <a href="admin-customers.php">
            <span class="icon">
              <ion-icon name="People-outline"></ion-icon>
            </span>
            <span class="title">Customers</span>
          </a>
        </li>
        <li>
          <a href="admin-blog.php">
            <span class="icon">
              <ion-icon name="podium-outline"></ion-icon>
            </span>
            <span class="title">Inventory</span>
          </a>
        </li>
        <li>
          <a href="../admin/admin.php">
            <span class="icon">
              <ion-icon name="log-out-outline"></ion-icon>
            </span>
            <span class="title">Sign Out</span>
          </a>
        </li>
      </ul>
    </div>
    <!---main--->
    <div class="main">
      <div class="topbar">
        <div class="toggle">
          <ion-icon name="menu-outline"></ion-icon>
        </div>
      </div>


      <!--CARD-->
      <div class="container" id="con">

        <div class="cardBox">
          <div class="card" id="cords">
            <div>
              <div class="numbers"><?php
                                    $sql = "SELECT * FROM customer_order_history";
                                    $result = mysqli_query($con, $sql);

                                    if ($result) {
                                      $rowcount = mysqli_num_rows($result);
                                    }

                                    echo $rowcount ?></div>
              <div class="cardName">Sales</div>
            </div>
            <div class="iconBx">
              <ion-icon name="cart-outline"></ion-icon>
            </div>
          </div>

          <?php
          $sql = "SELECT COUNT (*) as total FROM customer_feedback";
          $result = mysqli_query($con, $sql);

          if (!$result) {

            echo '';
          } else {
            while ($row = mysqli_fetch_assoc($result)) {

              $total = $result['total'];
            }
          }
          ?>
          <div class="card" id="cords">
            <div>
              <div class="numbers"><?php
                                    $sql = "SELECT * FROM customer_feedback";
                                    $result = mysqli_query($con, $sql);

                                    if ($result) {
                                      $rowcount = mysqli_num_rows($result);
                                    }

                                    echo $rowcount ?></div>
              <div class="cardName">Feedback</div>
            </div>
            <div class="iconBx">
              <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
          </div>
          <div class="card" id="cords">
            <div>
              <div class="numbers">₱<?php
                                    $sql = "SELECT sum(price) as total_price FROM customer_order_history";
                                    $result = mysqli_query($con, $sql);

                                    if ($result) {
                                      $row = mysqli_fetch_assoc($result);

                                      $total_price = $row['total_price'];
                                    }



                                    echo  $total_price ?></div>
              <div class="cardName">Earnings</div>
            </div>
            <div class="iconBx">
              <ion-icon name="cash-outline"></ion-icon>
            </div>
          </div>
        </div>

      </div>
      <!--
      <div class="container">
        <div class="card1">
          <h2>"I had an amazing experience shopping at your store! The staff were very friendly and helpful, and they
            went out of their way to assist me with finding the products I needed. The prices were also very reasonable,
            and the quality of the products was excellent. I will definitely be coming back to shop at your store in the
            future."
            <br><br> from: Adrian Rodrigo Makiling
          </h2>
        </div>
      </div>
-->

      <div class="div" style="margin-top: 5%;"></div>

      <div class="card" id="cerds">
        <div class="header">CUSTOMER ORDERS</div>
        <div class="body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Customer</th>
                <th scope="col">Product</th>
                <th scope="col"></th>
                <th scope="col">Total</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM customer_orders ORDER BY id DESC";
            $result = mysqli_query($con, $sql);

            if (!$result) {

              echo '';
            } else {
              while ($row = mysqli_fetch_assoc($result)) {
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

                echo '
                      <tbody>
                        <tr class="centered-row">
                          <th scope ="row">' . $User . '</td>
                          <td> <div class="imagesrc">
                            <img src="' . $row['imagedata'] . '"/>
                            </div>
                          </td>
                          <td>' . $product_name . '
                              ' . $product_size . '<br>
                              Quantity:&nbsp;' . $quantity . '<br>
                          </td>
                          <td>₱' . $total . '.00</td>
                          <td>' . $date_time . '</td>
                      </tbody>
                ';
              }
            }
            ?>

          </table>
        </div>
      </div>

      <div class="card mt-5" id="cerds">
        <div class="header">CUSTOMER FEEDBACK</div>
        <div class="body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Customer</th>
                <th scope="col">Feedback</th>
                <th scope="col"></th>
                <th scope="col"></th>


              </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM customer_feedback ORDER BY id DESC";
            $result = mysqli_query($con, $sql);

            if (!$result) {

              echo '';
            } else {

              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $user = $row['user'];
                $feedback = $row['feedback'];
                $date_time = $row['date_time'];

                echo '
                      <tbody>
                        <tr class="centered-row">
                          <th scope ="row">' . $user . '</td>
                          <td>' . $feedback . '</td>
                          <td>' . $date_time . '</td>
                          <td>  <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
                                <i class="fas fa-info-circle"></i> </a>
                                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="Modal Title" id="exampleModalLabel" style="font-size: 12px"> ' . $user . ' Feedback</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>' . $feedback . '</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                                </td>


                      </tbody>
                ';
              }
            }

            ?>

          </table>
        </div>
      </div>

      <div class="div" style="margin-bottom: 5%;"></div>
    </div>

  </div>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
    //menu toggle
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick = function() {
      navigation.classList.toggle('active');
      main.classList.toggle('active');
    }

    //add hovered
    let list = document.querySelectorAll('.navigation li');

    function activelink() {
      list.forEach((item) =>
        item.classList.remove('hovered'));
      this.classList.add('hovered');
    }
    list.forEach((item) =>
      item.addEventListener('mouseover', activelink));
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
</body>

</html>