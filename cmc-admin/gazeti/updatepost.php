<?php
include '../../control/connection.php';
$title =$_POST['title'];
$description =$_POST['description'];
$id = $_POST['id'];
// Handle file upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);


$sql="update gazeti set title = '$title', description = '$description', image = '$target_file' where id= '$id'";
if ($conn->query($sql) === TRUE) {
  echo '<!DOCTYPE html>
  <html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Please Wait...</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../../control/dist/style.css">
  
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
   echo "<script>window.location.href='../gazeti/index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>