

<?php
session_start();
include('../SE/connection/connect.php');

if (isset($_POST['email']) && isset($_POST['password'])) {
  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $email = validate($_POST['email']);
  $password = validate($_POST['password']);

  if (empty($email)) {
    header("location: regis.php?error=Email is required");
    exit();
  } elseif (empty($password)) {
    header("location: regis.php?error=Password is required");
    exit();
  } else {

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['email'] === $email && $row['password'] === $password) {
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];

        header("location: home.php");
        exit();
      } else {
        
        header("location: regis.php?error=Incorrect Email and Password");
        exit();
      }
    } else {
        header("location: regis.php?error=Incorrect Email and Password");
      exit();
    }
  }
} else {
  header("location: regis.php");
  exit();
}


?>