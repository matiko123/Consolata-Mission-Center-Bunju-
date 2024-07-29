<?php
// Connect to your database
include '../control/connection.php';
//rooms
// Unapproved bookings
$sql1 = "SELECT *from gazeti";
$result1 = $conn->query($sql1);
$data1 = array();

$sql2 = "SELECT *from gazeti";
$result2 = $conn->query($sql2);
$data2 = array();

if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
        $data1[] = $row1;
    }
}

if ($result2->num_rows > 0) {
    while($row2 = $result2->fetch_assoc()) {
        $data2[] = $row2;
    }
}


?>






