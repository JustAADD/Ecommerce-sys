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


if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

  header("location:admin-dashboard.php");

}

if (isset($_POST['submit'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];
  $message = "Invalid email or password";

  $query = "SELECT * FROM admin_login WHERE email='$email' AND password='$password'";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) == 1) {
    // Email and password are valid
    header("refresh:0.1;url=admin-dashboard.php");
  } else {
    // Invalid email or password
    echo "<script>alert('$message')</script>";
  }

  $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in</title>
  <link rel="shorcut icon" style="width: 150px;" href="../admin/css/signin.css">


  <!--fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--css-->
  <link href="stylesheet" href="../admin/css/signin.css">

  <style>
    :root {
      --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      --font-primary: "Montserrat", sans-serif;
      --font-secondary: "Poppins", sans-serif;
    }

    /* Colors */
    :root {
      --color-default: #222222;
      --color-primary: #008374;
      --color-secondary: #f85a40;
      --color-third: #000000;
      --color-fourth: #ff0000;
      --color-fifth: #f1ede8;
      --color-six: #e8ae97;
      --color-seven: #755b33;
    }

    /* Smooth scroll behavior */
    :root {
      scroll-behavior: smooth;
    }

    body {

      background-color: #222426;
      margin: 0;
      padding: 0;
    }

    .container {
      margin: 0 auto;
      justify-content: center;
      width: 100%;
      max-height: fit-content;
      background-color: var(--color-default);
      display: flex;
      align-items: center;
      margin-top: 8%;
    }

    .card {
      width: 500px;
      height: 500px;
      border-radius: 30px;
      border-color: #c5c5c5;
      box-shadow: 10px 10px 10px #f85a40,
        -10px -10px 10px var(--color-seven);
      padding: 50px;
    }


    .button2 {
      display: inline-block;
      transition: all 0.2s ease-in;
      position: relative;
      overflow: hidden;
      z-index: 1;
      color: #fff;
      ;
      padding: 0.7em 1.7em;
      font-size: 14px;
      border-radius: 0.5em;
      background-color: #1f1f1f;
      border: 1px solid #e8e8e8;
      box-shadow: 6px 6px 12px #c5c5c5,
        -6px -6px 12px #ffffff;
      width: 80%;
      height: 50px;
      margin-left: 38px;
      margin-top: 15px;
    }

    .button2:active {
      color: #1f1f1f;
      box-shadow: inset 4px 4px 12px #c5c5c5,
        inset -4px -4px 12px #ffffff;
    }

    .button2:before {
      content: "";
      position: absolute;
      left: 50%;
      transform: translateX(-50%) scaleY(1) scaleX(1.25);
      top: 100%;
      width: 140%;
      height: 180%;
      background-color: rgba(0, 0, 0, 0.05);
      border-radius: 50%;
      display: block;
      transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
      z-index: -1;
    }

    .button2:after {
      content: "";
      position: absolute;
      left: 55%;
      transform: translateX(-50%) scaleY(1) scaleX(1.45);
      top: 180%;
      width: 160%;
      height: 190%;
      background-color: #1f1f1f;
      border-radius: 50%;
      display: block;
      transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
      z-index: -1;
    }

    .button2:hover {
      color: #ffffff;
      border: 1px solid var(--color-seven);
    }

    .button2:hover:before {
      top: -35%;
      background-color: var(--color-seven);
      transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
    }

    .button2:hover:after {
      top: -45%;
      background-color: var(--color-seven);
      transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
    }

    .text-center {
      font-size: 23px;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="email"],
    input[type="password"] {
      display: block;
      margin-bottom: 20px;
      width: 100%;
      padding: 10px;
      font-size: 16px;
    }

    input[type="button2"] {
      background-color: #4caf50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .bg {
      width: 100%;
      height: 500px;
    }

    #label label,
    input {
      color: #716F6F;
    }
  </style>

</head>

<body>
  <div class="container" id="contaner">
    <div class="row g-0">
      <div class="col">
        <div class="card">
          <form action="../admin/admin.php" method="POST" id="login-form">
            <div class="text-center mb-5">Welcome to Yoo-naa</div>
            <div class="mb-3" id="label">
              <label for="email">Admin Email</label>
              <input type="email" id="email" name="email" placeholder="Your email:" required>
            </div>
            <div class="mb-3" id="label">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="Your password:" required>
            </div>
            <a href="admin\admin-dashboard.php">
              <button class="button2" name="submit" id="submit">
                Sign in
              </button></a>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js" type="text/javascript"> </script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.trunk.min.js" type="text/javascript"> </script>

  <!---Vantajs-->
  <script>
    VANTA.TRUNK({
      el: "#contaner",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      maxHeight: 500.00,
      maxWidth: 500.00,
      scale: 1.00,
      scaleMobile: 1.00,
    })

    const form = document.getElementById("login-form");
    const usernameInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");

    form.addEventListener("button2", (event) => {
      let errors = [];

      if (usernameInput.value.trim() === " ") {
        errors.push("Email is required.");
      }

      if (passwordInput.value.trim() === " ") {
        errors.push("Password is required.");
      }

      if (errors.length > 0) {
        event.preventDefault();

        const errorContainer = document.createElement("div1");
        errorContainer.classList.add("error");

        errors.forEach((error) => {
          const errorText = document.createTextNode(error);
          const errorElement = document.createElement("p");
          errorElement.appendChild(errorText);
          errorContainer.appendChild(errorElement);
        });

        form.appendChild(errorContainer);
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>