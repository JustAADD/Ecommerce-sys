<?php
session_start();
include('connection\connect.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

function sendemail_verify($fullname, $email, $verify_token)
{
  $mail = new PHPMailer(true);
  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'yoonaafashiondesign@gmail.com';                 //SMTP username
  $mail->Password   = 'wjxquzsrklcfwqpe';                               //SMTP password
  $mail->SMTPSecure = 'ssl';    //Enable implicit TLS encryption
  $mail->Port       = 465;

  $mail->setFrom('yoonaafashiondesign@gmail.com');
  $mail->addAddress($email);
  $mail->isHTML(true);
  //Set email format to HTML
  $mail->Subject = 'Email verification from yoo-naa';


  $email_template = "
  <h3>You have registered with yoo-naa</h3>
  <h5>Verify your email address to login with the below given link</h5>
  <br/><br/>
  <a href='http://localhost/se/everification.php?token=$verify_token'> Click me </a>
  ";

  $mail->Body = $email_template;
  $mail->send();

  echo '<script>alert("Your Email Verification has been sent!");</script>';
 
  header("refresh:0.1;url=regis.php");
}


if (isset($_POST['submit'])) {

  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $number = $_POST['phone'];
  $password = $_POST['password'];
  $verify_token = md5(rand());

  $date = new DateTime('now', new DateTimeZone('UTC'));
  $date->setTimezone(new DateTimeZone('Asia/Manila'));
  $created_at  = date("Y-m-d h:i:s A");

  if (

    empty($_POST['fullname']) ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['password']) ||
    empty($_POST['cpassword'])

  ) {
    header("refresh:0.1;url=regis.php");
  } else {

    $check_fullname = mysqli_query($con, "SELECT email FROM users where email = '" . $_POST['email'] . "' ");
    $check_email = mysqli_query($con, "SELECT password FROM users where password = '" . $_POST['password'] . "' ");

    if ($_POST['password'] != $_POST['cpassword']) {

      echo "<script>alert('Password not match');</script>";
      header("refresh:0.1;url=regis.php");
    } elseif (strlen($_POST['password']) < 6) {
      echo "<script>alert('Password Must be >=6');</script>";
      header("refresh:0.1;url=regis.php");
    } elseif (strlen($_POST['phone']) < 10) {
      echo "<script>alert('Invalid phone number!');</script>";
      header("refresh:0.1;url=regis.php");
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      echo "<script>alert('Invalid email address please type a valid email!');</script>";
      header("refresh:0.1;url=regis.php");
    } elseif (mysqli_num_rows($check_email) > 0) {
      echo "<script>alert('Email Already exists!');</script>";
      header("refresh:0.1;url=regis.php");
    } else {

      $query = "INSERT INTO users (fullname,email,phone,password,verify_token, created_at) VALUES ('$fullname','$email','$number', '$password', '$verify_token','$created_at')";
      $query_run = mysqli_query($con, $query);

      if ($query_run) {

        sendemail_verify("$fullname", "$email", "$verify_token");


        // "
        // <script>
        // alert('Sent Verification');
        // document.location.href = 'everification.php';
        // </script>
        // ";
        // //echo "Data inserted successfully";
        header("refresh:0.1;url=regis.php");
      } else {

        echo "There was a problem";
      }
    }
  }
}
