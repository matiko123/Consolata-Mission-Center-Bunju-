<?php
include 'connection.php';
$name =mysqli_real_escape_string($conn,$_POST['name']);
$phone =mysqli_real_escape_string($conn,$_POST['phone']);
$service =$_POST['service'];
$quantity =$_POST['quantity'];
$price =$_POST['price'];


$sql="insert into meals(buyer,phone_email,service,quantity,price) values('$name','$phone','$service','$quantity','$price') ";
if ($conn->query($sql) === TRUE) {
  echo '<!DOCTYPE html>
  <html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Please Wait...</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="dist/style.css">
  
  </head>
  <body>
  <div class="loading-container">
    <div class="loading-text">
      <span>L</span>
      <span>O</span>
      <span>A</span>
      <span>D</span>
      <span>I</span>
      <span>N</span>
      <span>G</span>
    </div>
  </div>
  </body>
  </html>';
   echo "<script>window.location.href='bookings.php?phone=$phone';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>