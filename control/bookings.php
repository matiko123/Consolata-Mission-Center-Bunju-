<?php
// Connect to your database



include 'connection.php';
$phone =$_GET['phone'];
// My  bookings
$sql1 =  "SELECT * FROM halls  where phone_email='$phone'";
$result1 = $conn->query($sql1);
$sql2 = "SELECT buyer FROM halls where phone_email='$phone'";
$result2 = $conn->query($sql2);
$sql3 = "SELECT buyer FROM meals where phone_email='$phone'";
$result3 = $conn->query($sql3);
$sql4 = "SELECT * FROM meals where phone_email='$phone'";
$result4 = $conn->query($sql4);
$sql5 = "SELECT * FROM rooms where phone_email='$phone'";
$result5 = $conn->query($sql5);
$sql6 = "SELECT * FROM rooms where phone_email='$phone'";
$result6 = $conn->query($sql6);
$name="Booking not found!";
if ($result2->num_rows > 0) {
  while( $row = $result2->fetch_assoc()){
    $name=$row['buyer'];
  }
}if($result3->num_rows > 0) {
  while( $row = $result3->fetch_assoc()){
    $name=$row['buyer'];
  }
}if($result6->num_rows > 0) {
  while( $row = $result6->fetch_assoc()){
    $name=$row['buyer'];
  }
  }
?>




<html>
    <head>
        <title>CMC Administration Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/Article-Clean.css">
        <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
        <link rel="stylesheet" href="assets/css/Footer-Basic.css">
        <link rel="stylesheet" href="assets/css/Footer-Clean.css">
        <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
        <link rel="stylesheet" href="assets/css/Map-Clean.css">
        <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/Team-Boxed.css">
        <!--fevicon-->
<link rel="shortcut icon" href="img/virgin-logo.png" type="image/x-icon">

	<!--rotation style-->
  <style>
		.cardboard {
		  width: 200px;
		  height: 300px;
		  position: relative;
		  perspective: 1000px;
      pointer-events: none;
		}
	  
		.card {
		  width: 100%;
		  height: 100%;
		  position: absolute;
		  transform-style: preserve-3d;
		  animation: rotateCard 4s infinite alternate;
      pointer-events: none;
		}
	  
		.front, .back {
		  width: 140%;
		  height: 95%;
		  position: absolute;
		  backface-visibility: hidden;
		}
	  
		.front {
		  background-image: url('../img/Logo.png');
		  background-size: contain;

		}
	  
		.back {
		  background-image: url('../img/virgin-logo.png');
		  background-size: contain;
		  transform: rotateY(180deg);
		  margin-left: -2cm;
		}
	  
		@keyframes rotateCard {
		  0% {
			transform: rotateY(0deg) scale(0.21);
		  }
		  100% {
			transform: rotateY(180deg) scale(0.2);
		  }
		}

	  </style>
    
    </head>
    <body>
<div class="container" style="margin-top: 3cm;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" >
        <div class="container-fluid myfluid">
          <a class="navbar-brand" href="#">
  <!--Rotating logo-->
	<div class="cardboard" style="margin-top: -3.2cm;margin-left: -2cm;" >
    <div class="card" style="background-color:transparent;border:  solid transparent;">
      <div class="front"></div>
      <div class="back"></div>
    </div>
    </div>
  <!--Rotating logo--> 
          </a>
          <label>
            <span" style="margin-right:20px">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                    <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                  </svg> 
            <?php echo $name ?></span>
          </label>
        </div>
      </nav>
</div>


  
    <!--Admin Container-->
    <div class="container border border-primary-subtle " style="background-color: white;border-radius: 10px;display: block;" id="roomsControl" >
      <!--Buttons starts-->
      <div class="container px-4 text-center" style="margin-top: 0.5cm;">
        <div class="row gx-5">
          <div class="col btn btn-outline-primary" onclick="window.location.href='../'" id="viewButton">
           <div class="p-3">Back Home</div>
          </div>
        </div>
      </div>
      <!--Buttons Ends-->
      <!--view table starts-->
      <div style="display: block;" id="viewTable" >
      <table class="table table-hover" style="margin-top: 0.5cm;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Service</th>
            <th scope="col">Price</th>
            <th scope="col">Booking Date</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
    <!-- displayed values from database -->


 <div >
        <tbody >
        <?php
        $i=0;
if ($result1->num_rows > 0) {
   while( $row = $result1->fetch_assoc()){
    $i++;
	$id = $row["id"];
	$service = $row["service"];
    $price1=$row["price"];
    $adate=$row["arrival_date"];
    $bdate=$row["booking_date"];
    $ddate=$row["departure_date"];
    $image = $row["image"];
    $status=$row["status"];
    $upload ="none";
    $approved="none";
    $pending="block";
    if($image=='0'){
        $upload ="block";
    $approved="none";
    $pending="none";
    }

    if($image!='0' && $status==1){
        $upload ="none";
    $approved="block";
    $pending="none";
    }
    echo '
          <tr >
            <th scope="row">'.$i.'</th>
            <td>'.$service.'</td>
            <td>'. number_format($price1) .' /=</td>
            <td>'.$bdate.'</td>
            <td>
            <form action="uploadhallsimage.php" method="post"  enctype="multipart/form-data">
            <input type="hidden" name="id" value='.$id.'>
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#screenshot1'.$id.'" style="display:'.$upload.'">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
          </svg>
          Pay 
        </button>
<div  style="display:'.$pending.'">
        <label style="color: red;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
          <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
        </svg>
        Pending Approval
      </label> 
</div>
<div style="display:'.$approved.'">
      <label style="color: green;" >
        <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
          <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
        </svg>
        Approved
      </label>
</div>

<!-- Screenshot Modal Starts -->
<div class="modal fade" id="screenshot1'.$id.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"  style="border:solid rgb(223, 229, 231)">
      <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Required to Pay Tsh '.number_format($price1).'/= </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      CRDB Name : CONSOLATA FATHERS PROCURE. <br> 
      Account Number : <strong style="color: blue;"> 01J1 0215 39601 </strong>  
    </div><hr>
    <div class="modal-body">
      M-Pesa Name : CONSOLATA MISSION CENTER<br>
      M-Pesa Number : <strong style="color: blue;">+255 756 909 290</strong>
    </div><hr> 
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Please send us a picture of the Transaction</h1>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Select From Your Images </label>
        <input type="file" class="form-control" id="exampleFormControlInput1" name="image" required >
        <input type="hidden"  name="phone" value='.$phone.' >
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-outline-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708z"/>
            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
          </svg>
          Upload
        </button>
      </div>
    </div>
    </div>
  </div>
</div>
  <!--Screenshot Modal ends--> 
</form>
            </td>
          </tr>

          ';
    }
}if($result4->num_rows > 0) {
  while( $row = $result4->fetch_assoc()){
    $i++;
    $id = $row["id"];
    $service = $row["service"];
      $price2=$row["price"];
      $bdate=$row["booking_date"];
      $image = $row["image"];
      $status=$row["status"];
      $quantity=$row["quantity"];
      $upload ="none";
      $approved="none";
      $pending="block";
      if($image=='0'){
          $upload ="block";
      $approved="none";
      $pending="none";
      }
  
      if($image!='0' && $status==1){
          $upload ="none";
      $approved="block";
      $pending="none";
      }
      echo '
            <tr >
              <th scope="row">'.$i.'</th>
              <td>'.$service.'</td>
              <td>'.$quantity.' x '. number_format($price2) .' /=</td>
              <td>'.$bdate.'</td>
              <td>
              <form action="uploadmealsimage.php" method="post"  enctype="multipart/form-data">
              <input type="hidden" name="id" value='.$id.'>
              <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#screenshot2'.$id.'" style="display:'.$upload.'">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
              <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
              <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
              <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
            </svg>
          Pay 
          </button>
  <div  style="display:'.$pending.'">
          <label style="color: red;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
            <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
          </svg>
          Pending Approval
        </label> 
  </div>
  <div style="display:'.$approved.'">
        <label style="color: green;" >
          <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
          </svg>
          Approved
        </label>
  </div>
  
  <!-- Screenshot Modal Starts -->
  <div class="modal fade" id="screenshot2'.$id.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content"  style="border:solid rgb(223, 229, 231)">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Required to Pay Tsh '.number_format($price2*$quantity).'/= </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        CRDB Name : CONSOLATA FATHERS PROCURE. <br> 
        Account Number : <strong style="color: blue;"> 01J1 0215 39601 </strong>  
      </div><hr>
      <div class="modal-body">
        M-Pesa Name : CONSOLATA MISSION CENTER<br>
        M-Pesa Number : <strong style="color: blue;">+255 756 909 290</strong>
      </div><hr> 
      <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Please send us a picture of the Transaction</h1>
        </div>
        <div class="modal-body">
        <form action="uploadmealsimage.php" method="post">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Select From Your Images </label>
          <input type="file" class="form-control" id="exampleFormControlInput1" name="image" required >
          <input type="hidden"  name="phone" value='.$phone.' >
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708z"/>
              <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
            </svg>
            Upload
          </button>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>
    <!--Screenshot Modal ends--> 
              </td>
            </tr>
  
            ';
  }
}if($result5->num_rows > 0) {
  while( $row = $result5->fetch_assoc()){
    $i++;
    $id = $row["id"];
    $service = $row["service"];
      $price3=$row["price"];
      $bdate=$row["booking_date"];
      $image = $row["image"];
      $status=$row["status"];
      $upload ="none";
      $approved="none";
      $pending="block";
      if($image=='0'){
          $upload ="block";
      $approved="none";
      $pending="none";
      }
  
      if($image!='0' && $status==1){
          $upload ="none";
      $approved="block";
      $pending="none";
      }
      echo '
            <tr >
              <th scope="row">'.$i.'</th>
              <td>'.$service.'</td>
              <td>'. number_format($price3) .' /=</td>
              <td>'.$bdate.'</td>
              <td>
              <form action="uploadroomsimage.php" method="post"  enctype="multipart/form-data">
              <input type="hidden" name="id" value='.$id.'>
              <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#screenshot3'.$id.'" style="display:'.$upload.'">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
              <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
              <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
              <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
            </svg>
          Pay 
          </button>
  <div  style="display:'.$pending.'">
          <label style="color: red;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
            <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
          </svg>
          Pending Approval
        </label> 
  </div>
  <div style="display:'.$approved.'">
        <label style="color: green;" >
          <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
          </svg>
          Approved
        </label>
  </div>
  
  <!-- Screenshot Modal Starts -->
  <div class="modal fade" id="screenshot3'.$id.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content"  style="border:solid rgb(223, 229, 231)">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Required to Pay Tsh '.number_format($price3).'/= </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        CRDB Name : CONSOLATA FATHERS PROCURE. <br> 
        Account Number : <strong style="color: blue;"> 01J1 0215 39601 </strong>  
      </div><hr>
      <div class="modal-body">
        M-Pesa Name : CONSOLATA MISSION CENTER<br>
        M-Pesa Number : <strong style="color: blue;">+255 756 909 290</strong>
      </div><hr> 
      <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Please send us a picture of the Transaction</h1>
        </div>
        <div class="modal-body">
        <form action="uploadroomsimage.php" method="post">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Select From Your Images </label>
          <input type="file" class="form-control" id="exampleFormControlInput1" name="image" required >
          <input type="hidden"  name="phone" value='.$phone.' >
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708z"/>
              <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
            </svg>
            Upload
          </button>
        </div>
      </div>
      </div>
    </div>
  </div>
  </form>
              </td>
            </tr>
  
            ';
    }
  }

          ?>
         
        </tbody>
        <!-- end of values displayed from database -->
      </table>
    </div>
      <!--View Table ends-->
    
      </div>
        <!--Admin container ends-->
            <!--Admin Container-->
    <div class="container border border-primary-subtle" style="background-color: white;border-radius: 10px;display: none;" id="hallsControl" >
  
      <!--Halls Pending table starts-->
      <div style="display: block;" id="hallsPendingTable">
      <table class="table table-hover" style="margin-top: 0.5cm;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email</th>
            <th scope="col">Halls</th>
            <th scope="col">Price</th>
            <th scope="col">Date</th>
            <th scope="col">Approval</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>+255712345678</td>
            <td>trialemail12345@gmail.com</td>
            <td>Bakhita Hall</td>
            <td>120,000 /=</td>
            <td>2024-05-12</td>
            <td>
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view">
                   <svg  xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
          </svg>
                Approve
              </button>
            </td>
          </tr>
          <tr>
           <th scope="row">2</th>
            <td>+25575555333</td>
            <td>mailmailemail12345@gmail.com</td>
            <td>Allamano Hall</td>
            <td>590,000 /=</td>
            <td>2024-09-24</td>
            <td>
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view">
                    <svg  xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
          </svg>
                Approve
              </button>
            </td>
          </tr>
          
           <tr>
           <th scope="row">3</th>
            <td>+25575555333</td>
            <td>lastmailemail@gmail.com</td>
            <td>Pengo Hall</td>
            <td>470,000 /=</td>
            <td>2024-07-02</td>
            <td>
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view">
                <svg  xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
          </svg>
                Approve
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
      <!--Halls Pending  Table ends-->
      
      
<!--Halls Approve Table table starts-->
<div style="display: none;" id="hallsApproveTable">
   <table class="table table-hover" style="margin-top: 0.5cm;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email</th>
            <th scope="col">Halls </th>
            <th scope="col">Price</th>
            <th scope="col">Date</th>
            <th scope="col">Approval</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>+255712345678</td>
            <td>trialemail12345@gmail.com</td>
            <td>Allamano</td>
            <td>460,000 /=</td>
            <td>2024-05-12</td>
            <td>
              <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#view">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                </svg>
                Disapprove
              </button>
            </td>
          </tr>
          <tr>
           <th scope="row">2</th>
            <td>+25575555333</td>
            <td>mailmailemail12345@gmail.com</td>
            <td>Pengo Hall</td>
            <td>940,000 /=</td>
            <td>2024-09-24</td>
            <td>
              <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#view">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                </svg>
                Disapprove
              </button>
            </td>
          </tr>
          
           <tr>
           <th scope="row">3</th>
            <td>+25575555333</td>
            <td>lastmailemail@gmail.com</td>
            <td>Allamano</td>
            <td>700,000 /=</td>
            <td>2024-07-02</td>
            <td>
              <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#view">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                </svg>
                Disapprove
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
      <!--View Table ends-->
     

</div>
<!--create table ends-->
      </div>
        <!--Admin container ends-->

     
 <!--footer starts -->
 <div style="margin-bottom:1cm">
  </div>
<div class="fixed-bottom bg-secondary-subtle" style="background-color:#f3eecaba;">
  <div class="container text-center">
    <div class="row" >
      <div class="col order-last">
        <h6 style="font-size:12px!important"><a href="https://wa.me/255698267662">Dozzer Web App Developer</a></h6>
      </div>
      <div class="col">
        <h6 style="font-size:12px!important">Designed And Developed By </h6>
      </div>
      <div class="col order-first">
        <h6 style="font-size:12px!important;">
        &nbsp;&nbsp;&nbsp;&nbsp;&copy;2024 &nbsp; All right Reserved</h6>
      </div>
    </div>
  </div>
</div>
<!--footer ends-->
 

   



 <!--Navigation bar simulator on mobile--> 
 <a href="#" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" id="myanchor" style="display: none;">nav simulator</a>
  <!--End of  Navigation bar simulator on mobile--> 


 



    </body>
    

    <script>


           function home(){
            adminview.style.display="none";
            homediv.style.display="block";
            aboutdiv.style.display="block";
            halls.style.display="none";
            meals.style.display="none";
            contactdiv.style.display="none";
            accomodations.style.display="none";
            homemenu.style="border:1px solid rgb(238, 201, 68)!important";
            aboutmenu.style="border:1px solid transparent!important;";
            servicemenu.style="border:1px solid transparent!important;";
            contactmenu.style="border:1px solid transparent!important;";
            loginmenu.style="border:1px solid transparent!important";
           }


           function admin(){
            window.scrollTo({top:0,behavior:"smooth"})
            adminview.style.display="block";
            accomodations.style.display="none";
            meals.style.display="none";
            aboutdiv.style.display="none";
            homediv.style.display="none";
            halls.style.display="none";
            contactdiv.style.display="none";
            servicemenu.style="border:1px solid transparent!important";
            aboutmenu.style="border:1px solid transparent!important";
            homemenu.style="border:1px solid transparent!important";
            loginmenu.style="border:1px solid rgb(238, 201, 68)!important";
            contactmenu.style="border:1px solid transparent!important;";
           }
           
           window.addEventListener('popstate', function(event){
            var myanchor=document.getElementById('myanchor');
            myanchor.click();
        }
        )

        function view(){
          window.scrollTo({top:0,behavior:"smooth"})
          viewTable.style.display="block";
          createTable.style.display="none";
          viewButton.classList="col btn btn-primary";
          createButton.classList="col btn btn-outline-success mygap";
        }

        function manage(){
          window.scrollTo({top:0,behavior:"smooth"})
          viewTable.style.display="none";
          createTable.style.display="none";
          viewButton.classList="col btn btn-outline-primary";
          createButton.classList="col btn btn-outline-success mygap";
        }

        function create(){
          window.scrollTo({top:0,behavior:"smooth"})
          createTable.style.display="block";
          viewTable.style.display="none";
          createButton.classList="col btn btn-success mygap";
          manageButton.classList="col btn btn-outline-warning mygap";
          viewButton.classList="col btn btn-outline-primary";
        }
        
          function hallsApprove(){
          window.scrollTo({top:0,behavior:"smooth"})
          hallsPendingTable.style.display="none";
          hallsApproveTable.style.display="block";
          hallsApproveButton.classList="col btn btn-success mygap";
          hallsPendingButton.classList="col btn btn-outline-primary";
        }
        
          function hallsPending(){
          window.scrollTo({top:0,behavior:"smooth"})
          hallsPendingTable.style.display="block";
          hallsApproveTable.style.display="none";
          hallsApproveButton.classList="col btn btn-outline-success mygap";
          hallsPendingButton.classList="col btn btn-primary";
        }


      document.addEventListener('click', function(e){
        if(!document.getElementById('navbarNavDropdown').contains(e.target) && document.getElementById('navbarNavDropdown').classList=='navbar-collapse mynav collapse show'){
          window.scrollTo({top:0,behavior:"smooth"})
          document.getElementById('mynavbar').click();
        }
      });
      
      function hallscontrol(){
      hallsControl.style.display="block";
      roomsControl.style.display="none";
      hallsLink.classList="nav-link myactive";
      roomsLink.classList="nav-link ";
      }
      
      function roomscontrol(){
      hallsControl.style.display="none";
      roomsControl.style.display="block";
      roomsLink.classList="nav-link myactive";
      hallsLink.classList="nav-link ";
      }
    </script>
    

</html>
