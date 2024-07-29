<?php
    include 'data.php';
    ?>
<html>
    <head>
        <title>CMC Administration Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

        <!--fevicon-->
<link rel="shortcut icon" href="../../img/virgin-logo.png" type="image/x-icon">

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
    <script>
window.onload = function() {

    fetch('../rooms/rooms.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('div2').innerHTML = data;
    });

    fetch('halls.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('div1').innerHTML = data;
    });

    fetch('../meals/meals.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('div3').innerHTML = data;
    });
}
</script>
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
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" id="mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse mynav " id="navbarNavDropdown">
            <ul class="navbar-nav mydropdown mymedia" >
        
             <li class="nav-item" data-bs-toggle="modal" data-bs-target="#login"  data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" id="#">
                <a class="nav-link " href="../rooms/" id="roomsLink">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-houses" viewBox="0 0 16 16">
  <path d="M5.793 1a1 1 0 0 1 1.414 0l.647.646a.5.5 0 1 1-.708.708L6.5 1.707 2 6.207V12.5a.5.5 0 0 0 .5.5.5.5 0 0 1 0 1A1.5 1.5 0 0 1 1 12.5V7.207l-.146.147a.5.5 0 0 1-.708-.708zm3 1a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708zm.707.707L5 7.207V13.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V7.207z"/>
</svg>
                  Rooms
                </a>
              </li>
              
              <li class="nav-item" data-bs-toggle="modal" data-bs-target="#login"  data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" id="#" >
                <a class="nav-link " href="../halls/" id="hallsLink">
                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                    <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z"/>
                    <path d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z"/>
                 </svg>
                  Conference Halls
                </a>
              </li>
              <li class="nav-item" data-bs-toggle="modal" data-bs-target="#login"  data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" id="#">
                <a class="nav-link" href="../meals/" id="mealsLink">        
             <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cup-hot" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6zM13 12.5a2 2 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5M2.64 13.825 1.123 7h11.754l-1.517 6.825A1.5 1.5 0 0 1 9.896 15H4.104a1.5 1.5 0 0 1-1.464-1.175"/>
                <path d="m4.4.8-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 3.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 6.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 9.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8"/>
             </svg>
                 Meals
                </a>
              </li>

              <li class="nav-item" data-bs-toggle="modal" data-bs-target="#login"  data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" id="#">
                <a class="nav-link myactive" href="../emeals/" >        
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
  <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
</svg>
                 Emails
                </a>
              </li>

              <li class="nav-item dropdown" id="servicemenu" style="position:absolute;right: 140px;">
                
                <a href="#" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                    <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                  </svg>  
                Profile
                </a>
          <ul class="dropdown-menu mysubmenu" >
            <li><a class="dropdown-item" href="#"  id="sub1"  data-bs-toggle="modal" data-bs-target="#changepassword">Change Password</a></li>
            <li><a class="dropdown-item" href="../../"  id="sub2" >
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
              <path d="M7.5 1v7h1V1z"/>
             <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812"/>
            </svg> 
            Logout
            </a>
          </li>
          </ul>
        </li>
            </ul>
          </div>
        </div>
      </nav>
</div>


     <!--Hallss Admin Container-->
     <div class="container border border-primary-subtle" style="background-color: white;border-radius: 10px;display: block;" id="hallControl" >
      

      <div style="display: block;max-height: 15cm;
    overflow-y: scroll;" id="hallPendingTable">
      <table class="table table-hover" style="margin-top: 0.5cm;font-size: small!important;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">View</th>
          </tr>
        </thead>


 <div >
        <tbody >
    <?php
    foreach ($data1 as $entry) {
     
    echo '
          <tr >
            <th scope="row">'.$entry['id'].'</th>
            <td>'.$entry['name'].'</td>
            <td>'.$entry['email'].'</td>
            <td>'.$entry['message'].'</td>
            <td>
            
      
              <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#viewscreenshot'.$entry['id'].'">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
              <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
              <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
            </svg>
                View Message
              </button>
            </td>
          </tr>
<div class="modal fade" id="viewscreenshot'.$entry['id'].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Message from :'.$entry['name'].'</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      '.$entry['message'].'
      <div class="modal-footer">
      <input type="hidden" name="id" value='.$entry['id'].'>
        <button type="submit" class="btn btn-outline-primary" data-bs-dismiss="modal">
        <svg  xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
        <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
      </svg>
        Close
        </button>
      </div>
    </div>
  </div>
</div>
          ';
    }
          ?>
         
        </tbody>
      </table>
    </div>

      
<!--Halls Approve Table table starts-->
<div style="display: none;" id="hallApproveTable">
<table class="table table-hover" style="margin-top: 0.5cm;font-size: small!important;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone/Email</th>
            <th scope="col">Hall Name</th>
            <th scope="col">Price</th>
            <th scope="col">Booking Date</th>
            <th scope="col">Arrival Date</th>
            <th scope="col">Departure_Date</th>
            <th scope="col">Approval</th>
          </tr>
        </thead>
        <tbody>
          <?php
    foreach ($data4 as $entry) {
    echo '
          <tr>
            <th scope="row">'.$entry['id'].'</th>
            <td>'.$entry['buyer'].'</td>
            <td>'.$entry['phone_email'].'</td>
            <td>'.$entry['service'].'</td>
            <td>'.number_format($entry['price']).'<i> Tsh</i></td>
            <td>'.$entry['booking_date'].'</td>
            <td>'.$entry['arrival_date'].'</td>
            <td>'.$entry['departure_date'].'</td>
            <td>
            <form action="../../control/cancelhall.php" method="post" id="disapprove" >
            <input type="hidden" name="id" value='.$entry['id'].'>
              <button type="submit" class="btn btn-outline-danger" >
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>

                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>

                </svg>
                Disapprove
              </button>
              </form>
            </td>
          </tr>
          ';
        }
              ?>


        </tbody>
      </table>
    </div>
</div>
      </div>
  
        <!--Halls Admin container ends-->
   <!--Admin Passwrd chanage Starts -->
<div class="modal fade" id="changepassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"  style="border:solid rgb(0, 179, 255)">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Change Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../../control/updatepassword.php" method="post">
      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Enter Your Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=" eg. abc@gmail.com " name="email" required>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Enter Old Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="*****" name="oldpassword" required>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Enter New  Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="*****" name="password" required>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Confirm New Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="*****" name="newpassword" required>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-outline-primary" >Confirm</button>
      </div>
      </form>
    </div>
    </div>
  </div>
</div>

<!--Admin change password ends-->

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
        
        function hallApprove(){
          hallPendingTable.style.display="none";
          hallApproveTable.style.display="block";
          hallApproveButton.classList="col btn btn-success mygap";
          hallPendingButton.classList="col btn btn-outline-primary";
        }
        
          function hallPending(){
          hallPendingTable.style.display="block";
          hallApproveTable.style.display="none";
          hallApproveButton.classList="col btn btn-outline-success mygap";
          hallPendingButton.classList="col btn btn-primary";
        }

        function mealsApprove(){
          mealsPendingTable.style.display="none";
          mealsApproveTable.style.display="block";
          mealsApproveButton.classList="col btn btn-success mygap";
          mealsPendingButton.classList="col btn btn-outline-primary";
        }
        
          function mealsPending(){
          mealsPendingTable.style.display="block";
          mealsApproveTable.style.display="none";
          mealsApproveButton.classList="col btn btn-outline-success mygap";
          mealsPendingButton.classList="col btn btn-primary";
        }



      document.addEventListener('click', function(e){
        if(!document.getElementById('navbarNavDropdown').contains(e.target) && document.getElementById('navbarNavDropdown').classList=='navbar-collapse mynav collapse show'){
          window.scrollTo({top:0,behavior:"smooth"})
          document.getElementById('mynavbar').click();
        }
      });
      
      function hallsControl(){
      div1.style.display="block";
      div2.style.display="none";
      div3.style.display="none";
      hallsLink.classList="nav-link myactive";
      roomsLink.classList="nav-link ";
      mealsLink.classList="nav-link ";
      }
      
      function roomsControl(){
      div1.style.display="none";
      div2.style.display="block";
      div3.style.display="none";
      roomsLink.classList="nav-link myactive";
      mealsLink.classList="nav-link ";
      hallsLink.classList="nav-link ";
      }

      function mealsControl(){
      div1.style.display="none";
      div2.style.display="none";
      div3.style.display="block";
      mealsLink.classList="nav-link myactive";
      hallsLink.classList="nav-link ";
      roomsLink.classList="nav-link ";
      }
    </script>
    



</html>
