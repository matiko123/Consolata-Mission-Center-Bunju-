<?php
include "connection.php";

$id = $_POST['id'];
$phone = mysqli_real_escape_string($conn,$_POST['phone']);



// Handle file upload
$target_dir = "../cmc-admin/uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

// Insert values into the 'admin' table
//$sql = "update bookings set upload=1 and image='$target_file' where id= '$id'";



$id=$_POST['id'];


$sql = "UPDATE halls set  image= '$target_file' where id= $id";

// Perform the update
if (mysqli_query($conn, $sql)) {
  echo '<!DOCTYPE html>
  <html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>CodePen - Loading Text Animation</title>
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
  echo "<script>window.location.href='bookings.php?phone=".$phone."'</script>";
    } else {
    echo "Error updating record: " . mysqli_error($connection);
}
// Close the database connection
mysqli_close($connection);
?>
