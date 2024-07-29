<?php
// Connect to your database
include '../../control/connection.php';
//rooms
// Unapproved bookings
$sql1 = "SELECT *from rooms where status=0 ";
$result1 = $conn->query($sql1);
$data1 = array();

if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
        $data1[] = $row1;
    }
}

// Approved bookings
$sql2 ="SELECT *from rooms where status=1";
$result2 = $conn->query($sql2);
$data2 = array();
if ($result2->num_rows > 0) {
    while($row2 = $result2->fetch_assoc()) {
        $data2[] = $row2;
    }
}

//halls
// Unapproved bookings
$sql3 = "SELECT * from halls where status=0 ";
$result3 = $conn->query($sql3);
$data3 = array();

if ($result3->num_rows > 0) {
    while($row3 = $result3->fetch_assoc()) {
        $data3[] = $row3;
    }
}

// Approved bookings
$sql4 ="SELECT *from halls where status=1 ";
$result4 = $conn->query($sql4);
$data4 = array();
if ($result4->num_rows > 0) {
    while($row4 = $result4->fetch_assoc()) {
        $data4[] = $row4;
    }
}

//halls
// Unapproved bookings
$sql5 = "SELECT * from meals where status= 0";
$result5 = $conn->query($sql5);
$data5 = array();

if ($result5->num_rows > 0) {
    while($row5 = $result5->fetch_assoc()) {
        $data5[] = $row5;
    }
}

// Approved bookings
$sql6 ="SELECT * from meals where status=1 ";
$result6 = $conn->query($sql6);
$data6 = array();
if ($result6->num_rows > 0) {
    while($row6 = $result6->fetch_assoc()) {
        $data6[] = $row6;
    }
}

?>






