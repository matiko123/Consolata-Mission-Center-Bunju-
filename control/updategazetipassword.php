<?php

include 'connection.php';

$email =mysqli_real_escape_string($conn,$_POST['email']);
$newpassword =mysqli_real_escape_string($conn,$_POST['newpassword']);
$oldpassword =mysqli_real_escape_string($conn,$_POST['oldpassword']);

$sql1 = "SELECT *from gazetiadmin where email='$email' and password='$oldpassword' ";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
        $id=$row1['id'];
    }

    $sql="update gazetiadmin set password = '$newpassword' where id = '$id'; ";
    if ($conn->query($sql) === TRUE) {
        echo '<!DOCTYPE html>
        <html lang="en" >
        <head>
          <meta charset="UTF-8">
          <title>Loading...</title>
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
       echo "<script>window.location.href='../cmc-admin/gazeti/?updated';</script>";
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}else{
  echo "<script>window.location.href='../cmc-admin/no-gazeti-update/';</script>";
}



?>
