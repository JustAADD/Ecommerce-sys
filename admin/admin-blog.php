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

//session_start();

//if (isset($_SESSION['id']) && isset($_SESSION['fullname'])) {
//}
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
}
?>
<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
  $url = "https://";
} else {
  $url = "http://";
  $url .= $_SERVER['HTTP_HOST'];
  $url .= $_SERVER['REQUEST_URI'];
}
$page = $url;
$sec = "2";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="<?php echo $sec; ?>" URL="<?php echo $page; ?> ">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <!-- Favicons -->
  <link href="image\yoo-naa-logo.png" rel="icon">

  <link rel="stylesheet" href="../admin/css/dashboard.css">
  <link rel="stylesheet" href="../admin/css/order.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    .imagesrc img {
      width: 110px;
      height: 110px;
    }

    #addstocks {
      background-color: white;
      border: none;
      color: var(--black1);
      width: 35%;
      height: 32px;
      margin-left: 200px;
      font-size: 13px;
    }

    #addstocks:hover {
      background-color: var(--black1);
      border: none;
      color: #fff;
    }

    .centered-row {
      vertical-align: middle;
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
      margin-top: 20px;
    }

    .header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      font-size: 12px;
      font-weight: lighter;
      font-family: sans-serif;
    }

    .header p {
      font-size: 13px;
      font-weight: lighter;
      font-family: sans-serif;
      text-align: justify;
    }

    .body {
      padding: 20px;
    }

    .table th,
    td {
      font-size: small;
    }
  </style>
</head>

<body>
  <div class="continer">
    <div class="navigation">
      <ul>
        <li>
          <a class="imahe" href="admin-dashboard.php" id="imahe">
            <img src="image\yoo-naa-logo.png" id="imahe" alt="Bootstrap" style="height: 80px; width: 170px; margin-top: 15px;">
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
        <div class="toggle" id="hide">
          <ion-icon name="menu-outline"></ion-icon>
        </div>
      </div>

      <!---UPDATED TABLE--->

      <div class="card" id="cerds">
        <div class="row g-0 header">
          <div class="col">
            <p class="my-2">STOCK INVENTORY</p>
          </div>
          <div class="col-6 col-md-4">
            <a class="btn btn-primary" id="addstocks" href="admin-add-stocks.php" role="button">Add Stocks</a>
          </div>
        </div>

        <div class="body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Product Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Stocks</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <?php
            $sql = "SELECT * FROM product_stocks ORDER BY id DESC";
            $result = mysqli_query($con, $sql);

            if (!$result) {

              echo '';
            } else {

              while ($row = mysqli_fetch_assoc($result)) {

                $id = $row['id'];
                $product_id = $row['product_id'];
                $imagedata = $row['imagedata'];
                $Product = $row['product'];
                $Price = $row['price'];
                $Stocks = $row['Stocks'];
                $date = $row['date'];

                echo '
                      <tbody>
                        <tr class="centered-row">
                          <th scope ="row">' . $product_id . '</td>
                          <td> <div class="imagesrc">
                            <img src="' . $row['imagedata'] . '"/>
                            </div>
                          </td>
                          <td>' . $Product . '</td>
                          <td>₱' . $Price . '</td>
                          <td> <button type="" class="btn btn-outline-success">' . $Stocks . '</button></td>
                          <td>' . $date . '</td>
                          <td> 
                          <a href="../admin/stockdelete.php? deleteid=' . $id . '"><i class="fa-solid fa-trash" style="color:red;"></i></a> &nbsp&nbsp
                          <a href="../admin/admin-view-stocks.php? updateid=' . $id . '"><button class="btn btn-dark btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="fa fa-edit"></i></a>
                          </td>
                      </tbody>
                ';
              }
            }
            ?>

          </table>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>


  <script>
    //logo disappear
    const imahe = document.getElementById('imahe');
    const hide = document.getElementById('hide');

    hide.addEventListener('click', function() {
      logo.style.display = 'none';
    });
  </script>

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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>