<?php
// Connect to your database
include '../../control/connection.php';
//rooms
// Unapproved bookings
$sql1 = "SELECT *from mailings order by id desc";
$result1 = $conn->query($sql1);
$data1 = array();

if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
        $data1[] = $row1;
    }
}

?>






