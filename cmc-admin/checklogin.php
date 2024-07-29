<?php
// Include the connection file
include '../control/connection.php';

$email = $_POST['email'];;
$passwd = $_POST['password'];

// Retrieve image path from the database
$sql = "SELECT * FROM admin where email='$email' and password='$passwd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>CodePen - Loading Text Animation</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../control/dist/style.css">
    
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
    echo "<script>window.location.href='../cmc-admin/rooms';</script>";
   }
   else{
    echo "<script>window.location.href='../cmc-admin/access-denied/';</script>";
   }
?>