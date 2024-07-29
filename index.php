<html>
    <head>
        <title>Bunju Mission Center CMC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

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
	  
		.mycard {
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
		  background-image: url('img/Logo.png');
		  background-size: contain;

		}
	  
		.back {
		  background-image: url('img/virgin-logo.png');
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
    <div class="mycard" style="background-color:transparent;border:  solid transparent;">
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
              <li class="nav-item myactive" onclick="home()" id="homemenu" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
            <!--  <li class="nav-item" onclick="about()" id="aboutmenu" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <a class="nav-link" href="#">About Us</a>
              </li>  -->
              <li class="nav-item dropdown" id="servicemenu" >
                
                      <a href="#" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Services 
                      </a>
                <ul class="dropdown-menu mysubmenu" >
                  <li><a class="dropdown-item" href="#" onclick="service1()" id="sub1" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">Conference Halls</a></li>
                  <li><a class="dropdown-item" href="#" onclick="service2()" id="sub2" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">Meals</a></li>
                  <li><a class="dropdown-item" href="#" onclick="service3()" id="sub3" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">Accomodations</a></li>
                </ul>
              </li>
              <li class="nav-item" >
                <a class="nav-link" href="gazeti/">Gazeti La Enendeni</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://consolatamissionariestz.org">Consolata Animations</a>
              </li>
              <li class="nav-item" onclick="contact()" id="contactmenu" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item" data-bs-toggle="modal" data-bs-target="#userLogin"  data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" id="loginmenu">
                <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-ticket-detailed" viewBox="0 0 16 16">
  <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2z"/>
  <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5z"/>
</svg>
                 My Bookings
                </a>
              </li>
              
              <li class="nav-item"  data-bs-target="#navbarNavDropdown" id="installButton" style="display: none;">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
            <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383"/>
            <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708z"/>
          </svg>                  
          Download App
          </li>
            </ul>
          </div>
        </div>
      </nav>
</div>

<div class="container" id="homediv" style="display: block;">
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active " data-bs-interval="3800"    >
            <img src="img/img1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item data-bs-interval;" data-bs-interval="3800"    >
            <img src="img/img2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item data-bs-interval;" data-bs-interval="3800"    >
            <img src="img/img3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item data-bs-interval;" data-bs-interval="3800"    >
            <img src="img/img4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item data-bs-interval;" data-bs-interval="3800"    >
            <img src="img/img5.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item data-bs-interval;" data-bs-interval="3800"    >
            <img src="img/img6.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item data-bs-interval;" data-bs-interval="3800"    >
            <img src="img/img7.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item data-bs-interval;" data-bs-interval="3800"    >
            <img src="img/img8.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item data-bs-interval;" data-bs-interval="3800"    >
            <img src="img/img9.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item data-bs-interval;" data-bs-interval="3800"    >
            <img src="img/img10.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
<br>
<br>

<!--About Us starts here-->
<div id="aboutdiv">
<div class="container">  
<div class="card-group">
<div class="card" style="margin-left:10px;margin-right:10px;border-radius:20px">
    <img src="img/cmc3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Who We Are</h5>
      <p class="card-text">	We Are SPIRITUAL CENTER with its first and main goal of creating an environment
				of prayer, facilitating religious and spiritual retreats, seminars and workshops ,
				accomodating individuals who seek for private and silent prayers.
      </p>
  </div>
  </div>
  <div class="card" style="margin-left:10px;margin-right:10px;border-radius:20px">
    <img src="img/cmc1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Our Goal</h5>
      <p class="card-text"> To facilitate religious, social and culltural activities
     aimed at building a better society by deepening evangelization ,
      promoting missonary spirit and vocation encouraging family values
      and intercultural integration, guiding light and hope to the youths.
    </p>
    </div>
  </div>
  </div><br> 
<div class="card-group" >
  <div class="card" style="margin-left:10px;margin-right:10px;border-radius:20px">
    <img src="img/cmc2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Services We Offer</h5>
      <p class="card-text"> To support community needs within our center, we offer different services
        to the society around us.  These are among services we offer.
      </p>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-action" onclick="service2()">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Meals</div>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-action btn-outline-primary" onclick="service3()">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Accomodation</div>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-action " onclick="service1()">
          <div class="ms-2 me-auto" >
            <div class="fw-bold">Conference Halls</div>
          </div>
        </li>
      </ol>

    </div>
  </div>
</div>
  </div>
  </div>
<!--About Us ends here-->

<!--Conference Halls starts here -->

 <div class="container" id="halls" style="display:none;margin-bottom: 3cm;margin-top: -2cm;">
  <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            CHENGULA HALL
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
      <div class="container">
            <img src="img/hall1.jpeg" class="img-fluid myimage" alt="..."><br><br>
            <table class="table table-hover">
              <tbody>
                <tr>
               <!--- <th scope="row">1</th> -->
                   <th scope="row">Maximum Capacity</th>
                  <td>5 People</td>
                </tr>
                <tr>
                  <th scope="row">Available Services</th>
                  <td>
                    <ul style="list-style-type:circle;">
                      <li>Printing @ 200Tsh</li>
                      <li>Free Internet</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                   <th scope="row">Price</th>
                  <td>50,000 Tsh</td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                     <!-- Button trigger modal -->                    
                     <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#hallsbooking" onclick="parseval('Chengula Hall','50000')">
                      Select This
                    </button>
                  </td>
                </tr>
              </tbody>
          </table>
        </div>
          </div>
        </div>
      </div>

      <!--accodration starts-->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            PENGO HALL
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
              
            <div class="container">
              <img src="img/hall2.jpeg" class="img-fluid myimage" alt="..."><br><br>
  
              <table class="table table-hover">
                <tbody>
                  <tr>
                 <!--- <th scope="row">1</th> -->
                     <th scope="row">Maximum Capacity</th>
                    <td>10 People</td>
                  </tr>
                  <tr>
                    <th scope="row">Available Services</th>
                  <td>
                    <ul style="list-style-type:circle;">
                      <li>Printing @ 200Tsh</li>
                      <li>Free Internet</li>
                    </ul>
                  </td>
                  </tr>
                  <tr>
                     <th scope="row">Price</th>
                    <td>75,000 Tsh</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                       <!-- Button trigger modal -->                    
                       <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#hallsbooking" onclick="parseval('Pengo Hall','75000')">
                        Select This
                      </button>
                    </td>
                  </tr>
                </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>
<!--Accordation ends-->
<!--accodration starts-->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      BAKHITA HALL
    </button>
  </h2>
  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        
      <div class="container">
        <img src="img/hall3.jpeg" class="img-fluid myimage" alt="..."><br><br>

        <table class="table table-hover">
          <tbody>
            <tr>
           <!--- <th scope="row">1</th> -->
               <th scope="row">Maximum Capacity</th>
              <td>25 People</td>
            </tr>
            <tr>
              <th scope="row">Available Services</th>
                  <td>
                    <ul style="list-style-type:circle;">
                      <li>Printing @ 200Tsh</li>
                      <li>Free Internet</li>
                    </ul>
                  </td>
            </tr>
            <tr>
               <th scope="row">Price</th>
              <td>100,000 Tsh</td>
            </tr>
            <tr>
              <td></td>
              <td>
                 <!-- Button trigger modal -->                    
                 <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#hallsbooking" onclick="parseval('Bakhita Hall','100000')">
                  Select This
                </button>
              </td>
            </tr>
          </tbody>
      </table>
    </div>

    </div>
  </div>
</div>
<!--Accordation ends-->
<!--accodration starts-->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      KIZITO HALL
    </button>
  </h2>
  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        
      <div class="container">
        <img src="img/hall2.jpeg" class="img-fluid myimage"" alt="..."><br><br>

        <table class="table table-hover">
          <tbody>
            <tr>
           <!--- <th scope="row">1</th> -->
               <th scope="row">Maximum Capacity</th>
              <td>25 People</td>
            </tr>
            <tr>
              <th scope="row">Available Services</th>
                  <td>
                    <ul style="list-style-type:circle;">
                      <li>Printing @ 200Tsh</li>
                      <li>Free Internet</li>
                    </ul>
                  </td>
            </tr>
            <tr>
               <th scope="row">Price</th>
              <td>100,000 Tsh</td>
            </tr>
            <tr>
              <td></td>
              <td>
                 <!-- Button trigger modal -->                    
                 <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#hallsbooking" onclick="parseval('Kizito Hall','100000')">
                  Select This
                </button>
              </td>
            </tr>
          </tbody>
      </table>
    </div>
    </div>
  </div>
</div>
<!--Accordation ends-->
<!--accodration starts-->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      CAGLIERO HALL
    </button>
  </h2>
  <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        
      <div class="container">
        <img src="img/hall1.jpeg" class="img-fluid myimage"" alt="..."><br><br>

        <table class="table table-hover">
          <tbody>
            <tr>
           <!--- <th scope="row">1</th> -->
               <th scope="row">Maximum Capacity</th>
              <td>45 People</td>
            </tr>
            <tr>
              <th scope="row">Available Services</th>
                  <td>
                    <ul style="list-style-type:circle;">
                      <li>Printing @ 200Tsh</li>
                      <li>Free Internet</li>
                    </ul>
                  </td>
            </tr>
            <tr>
               <th scope="row">Price</th>
              <td>200,000 Tsh</td>
            </tr>
            <tr>
              <td></td>
              <td>
                 <!-- Button trigger modal -->                    
                 <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#hallsbooking" onclick="parseval('Cagliero Hall','200000')">
                  Select This
                </button>
              </td>
            </tr>
          </tbody>
      </table>
    </div>

    </div>
  </div>
</div>
<!--Accordation ends-->
<!--accodration starts-->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      ALLAMANO HALL
    </button>
  </h2>
  <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        
      <div class="container">
        <img src="img/hall3.jpeg" class="img-fluid myimage" alt="..."><br><br>

        <table class="table table-hover">
          <tbody>
            <tr>
           <!--- <th scope="row">1</th> -->
              <th scope="row">Maximum Capacity</th>
              <td>250 People</td>
            </tr>
            <tr>
              <th scope="row">Available Services</th>
                  <td>
                    <ul style="list-style-type:circle;">
                      <li>Printing @ 200Tsh</li>
                      <li>Free Internet</li>
                    </ul>
                  </td>
            </tr>
          </tbody>
      </table>

      <table class="table table-hover">
        <tbody>
          <th scope="row">Event</th>
          <th scope="row">Price</th>
          <td></td>
          <tr>
         <!--- <th scope="row">1</th> -->
            <td>Normal Conference Activities</td>
            <td>500,000 Tsh</td>
            <td>
              <!-- Button trigger modal -->                    
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#hallsbooking" onclick="parseval('Allamano Hall','500000')">
                Select
              </button>
            </td>
          </tr>
          <tr>
            <td>Celebrations and Night Events</td>
            <td>800,000 Tsh</td>
            <td>
              <!-- Button trigger modal -->                    
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#hallsbooking" onclick="parseval('Allamano Hall','800000')">
                Select
              </button>
            </td>
          </tr>
        </tbody>
    </table>
      
    </div>

    </div>
  </div>
</div>
<!--Accordation ends-->
    </div>
  </div>

<!--End of halls-->



<!--Meals Starts Here-->
<div class="container" id="meals" style="display: none;margin-bottom: 3cm;">
  <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            BREAKFAST
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="container">
              <img src="img/breakfast.jpeg" class="img-fluid myimage" alt="..."><br><br>
  
              <table class="table table-hover">
                <tbody>
                  <tr>
                 <!--- <th scope="row">1</th> -->
                    <td>One Day Activity<br>
                      <span style="font-size: 14px;">( Simple Buffet )</span>
                    </td>
                    <td>6,000 Tsh</td>
                    <td>
                      <!-- Button trigger modal -->                    
                      <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#mealsbooking" onclick="parseval('Breakfast','6000')">
                        Request
                      </button>
                    </td>
                  </tr>
                </tbody>
            </table>
          </div>
        
          </div>
        </div>
      </div>

      <!--accodration starts-->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            LUNCH
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="container">
              <img src="img/lunch.jpeg" class="img-fluid myimage"" alt="..."><br><br>
  
              <table class="table table-hover">
                <tbody>
                  <tr>
                 <!--- <th scope="row">1</th> -->
                    <td>Simple Buffet</td>
                    <td>15,000 Tsh</td>
                    <td>
                      <!-- Button trigger modal -->                    
                      <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#mealsbooking" onclick="parseval('Lunch-simple buffet ','15000')">
                        Request
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Simple Buffet<br>
                      <span style="font-size: 14px;">( One Day Activity )</span>
                    </td>
                    <td>15,000 Tsh</td>
                    <td>
                      <!-- Button trigger modal -->                    
                      <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#mealsbooking" onclick="parseval('Lunch-One Day Activity','15000')">
                        Request
                      </button>
                    </td>
                  </tr>
                </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>
      <!--accordation ends-->


      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            DINNER
          </button>
        </h2>
        
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
              
            <div class="container">
              <img src="img/dinner.jpeg" class="img-fluid myimage"" alt="..."><br><br>
  
              <table class="table table-hover">
                <tbody>
                  <tr>
                 <!--- <th scope="row">1</th> -->
                    <td>Dinner</td>
                    <td>25,000 Tsh</td>
                    <td>
                      <!-- Button trigger modal -->                    
                      <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#mealsbooking" onclick="parseval('DInner','25000')">
                        Request
                      </button>
                    </td>
                  </tr>
                </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>

       <!--accodration starts-->
       <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            TEA
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="container">
              <img src="img/tea.jpeg" class="img-fluid myimage"" alt="..."><br><br>
  
              <table class="table table-hover">
                <tbody>
                  <tr>
                 <!--- <th scope="row">1</th> -->
                    <td>Tea At 10:00</td>
                    <td>3,000 Tsh</td>
                    <td>
                      <!-- Button trigger modal -->                    
                      <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#mealsbooking" onclick="parseval('Morning Tea','3000')">
                        Request
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Tea At 16:00</td>
                    <td>3,000 Tsh</td>
                    <td>
                      <!-- Button trigger modal -->                    
                      <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#mealsbooking" onclick="parseval('Evening Tea','3000')">
                        Request
                      </button>
                    </td>
                  </tr>
                </tbody>
            </table>
          </div>
  
          </div>
        </div>
      </div>
      <!--accordation ends-->

    </div>
  </div>

  <!--Meals Ends Here-->

  <!--Accomodations Starts Here-->
<div class="container" id="accomodations" style="display:none;margin-bottom: 3cm;margin-top: -2cm;">
  <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            ROOMS WITH AIR CONDITIONER
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
<div class="container">
            <img src="img/ac.jpeg" class="img-fluid myimage" alt="..."><br><br>

            <table class="table table-hover">
              <tbody>
                <tr>
               <!--- <th scope="row">1</th> -->
                  <td>Full Board Single</td>
                  <td>75,000 Tsh</td>
                  <td>
                    <!-- Button trigger modal -->                    
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#roomsbooking" onclick="parseval('Full Board Single','75000')">
                      Select
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>Full Board Couple</td>
                  <td>105,000 Tsh</td>
                  <td>
                    <!-- Button trigger modal -->                    
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#roomsbooking" onclick="parseval('Full Board Couple','105000')">
                      Select
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>Full Board Double</td>
                  <td>110,000 Tsh</td>
                  <td>
                    <!-- Button trigger modal -->                    
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#roomsbooking" onclick="parseval('Full Board Double','110000')">
                      Select
                    </button>
                  </td>
                </tr>
              </tbody>
          </table>
        </div>
          </div>
        </div>
      </div>

      <!--accodration starts-->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            ROOMS WITHOUT AIR CONDITIONER
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
              
            <div class="container">
              <img src="img/nac.jpeg" class="img-fluid myimage"  alt="..."><br><br>  
  
              <table class="table table-hover">
                <tbody>
                  <tr>
                 <!--- <th scope="row">1</th> -->
                    <td>Room For Single Person</td>
                    <td>35,000 Tsh</td>
                    <td>
                      <!-- Button trigger modal -->                    
                      <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#roomsbooking" onclick="parseval('Single Person','35000')">
                        Select
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Single Room For Couple</td>
                    <td>60,000 Tsh</td>
                    <td>
                      <!-- Button trigger modal -->                    
                      <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#roomsbooking" onclick="parseval('Single Room For Couple','60000')">
                        Select
                      </button>
                    </td>
                  </tr>
                </tbody>
            </table>
          </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Accomodations Ends Here-->

  <!-- Halls Modal -->
<div class="modal fade" id="hallsbooking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Enter Your Details</h1>




        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="control/inserthalls.php" method="POST" class="calendar" >
      <div class="modal-body">
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label"> Enter Your Full Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1"  name="name" pattern="[a-zA-Z0-9\s]+" title="Please enter alphanumeric characters only and emails." required>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label"> Enter Your Phone Number Or Email0</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" pattern="[a-zA-Z0-9@.\s]+" title="Please enter alphanumeric characters only!"   name="phone" required>
        </div>

              
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Arrival Date</label>
        <input type="date" class="form-control" name="adate" id="date" required>
        <label for="exampleFormControlInput1" class="form-label" style="color:red;display:none" id="booked"> Hall Occupied on this date. Please Select Another Date or Hall!</label>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Departure Date</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="ddate" required>
      </div>

      </div>
      <div class="modal-footer">
        <input type="hidden" value="no selection" name="service" id="service">
        <input type="hidden" value="0" name="price" id="price">
        <button class="btn btn-outline-primary"  type="submit" id="bookingbutton1">Request Booking</button>
      </form>
     
    </div>
  </div>
</div>
  </div>
  <!--Halls ends -->
   <!-- rooms  Modal -->
<div class="modal fade" id="roomsbooking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Enter Your Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="control/insertrooms.php" method="POST" class="calendar">
      <div class="modal-body">
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label"> Enter Your Full Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" pattern="[a-zA-Z0-9\s]+" title="Please enter alphanumeric characters only!"   name="name" required>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label"> Enter Your Phone Number Or Email</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" pattern="[a-zA-Z0-9@.\s]+" title="Please enter alphanumeric characters only and emails"   name="phone" required>
        </div>

              
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Arrival Date</label>
        <input type="date" class="form-control"  name="adate" id="date2" required>
        <label for="exampleFormControlInput1" class="form-label" style="color:red;display:none" id="booked2"> Room Occupied on this date. Please Select Another Date or Room!</label>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Departure Date</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="ddate" required>
      </div>

      </div>
      <div class="modal-footer">
        <input type="hidden" value="no selection" name="service" id="room">
        <input type="hidden" value="0" name="price" id="roomprice">
        <button class="btn btn-outline-primary"  type="submit" id="bookingbutton2">Request A Room</button>
      </form>
     
    </div>
  </div>
</div>
  </div>
  <!-- end of rooms -->
<!-- Meals Modal -->
<div class="modal fade" id="mealsbooking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Request A Meal</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="control/insertmeals.php" method="POST">
      <div class="modal-body">
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label"> Enter Your Full Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" pattern="[a-zA-Z0-9\s]+" title="Please enter alphanumeric characters only!"  name="name" required>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label"> Enter Your Phone Number Or Email</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" pattern="[a-zA-Z0-9@.\s]+" title="Please enter alphanumeric characters or email only!"   name="phone" required>
        </div>

              
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Order Quantity</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="quantity" required>
      </div>


      </div>
      <div class="modal-footer">
        <input type="hidden" value="no selection" name="service" id="meal">
        <input type="hidden" value="0" name="price" id="mealprice">
        <button class="btn btn-outline-primary"  type="submit">Request Booking</button>
      </form>
     
    </div>
  </div>
</div>
</div>
<!--Meals Modal Ends -->

  

  <!--Contact Section-->



  <div class="container " id="contactdiv" style="display: none;">
          <div class="container text-bg-light p-3 border border-warning-subtle">
            <div class="text-center">
            <h3 class="card-title">CONTACT US</h3><br>
            <h4 >            
              Address 
            </h4>
            <a class="link-offset-2 link-underline link-underline-opacity-0" href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>
            P.O.BOX 68140 -Boko -Dar es salaam
          </a>
            <br><br><br>

            <h4>
              
              Phone 
            </h4>
            <a class="link-offset-2 link-underline link-underline-opacity-0" href="tel:255756909290">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5"/>
            </svg>
            +255 756 909 290</a>
            <br><br><br>


            
            <h4>
              Email 
            </h4>
            <a class="link-offset-2 link-underline link-underline-opacity-0" href="mailto:cmc@consolata.net">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
              <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
              <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
            </svg>
            cmc@consolata.net</a>
          </div>
          </div>
          <br><br>

          <div class="container text-bg-light p-3 border border-warning-subtle text-center">
          <section class="contact-clean">

          <?php
require_once 'control/connection.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){

  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];


  $sql="insert into mailings (name,email,message) values('$name','$email','$message') ";
  if ($conn->query($sql) === TRUE) {
   
     echo "<script>alert('Message sent sucessfully!');</script>";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>
        <form method="post">
            <h2 class="text-center">Contact us</h2>
            <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="mb-3"><input class="form-control " type="email" name="email" placeholder="Email"></div>
            <div class="mb-3"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
            <div class="mb-3"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </section>
        </div>
      </div>
    </div>
  <!--End Of contact section-->
   




    <!--Delete Alert Starts-->
<div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"  style="border:solid red">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel" >
          <svg style="color: red;"xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z"/>
            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
          </svg>
          Warning.
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are You Sure You want To Delete ThornTorn ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
            <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
          </svg>
          Cancel
        </button>
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#done" >
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
          </svg>
          Yes
        </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="done" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"  style="border:solid green">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">
          <svg style="color:green" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
          </svg>
          Deleted
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
  <!-- Delete Alert ends-->
   <!-- User Login Modal Starts -->
<div class="modal fade" id="userLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"  style="border:solid rgb(223, 229, 231)">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">My Bookings</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="control/bookings.php" method="get">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Enter Your Phone Or Email</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" pattern="[a-zA-Z0-9@.\s]+" title="Please enter alphanumeric characters or email only!"  name="phone" required>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-outline-primary" >View</button>
      </div>
  </form>
    </div>
    </div>
  </div>
</div>
  <!--User Login Modal ends-->

  <!--Admin Login Modal Starts -->
<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"  style="border:10px">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">For Administrators Only !</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="cmc-admin/checklogin.php" method="post">
      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Enter Your Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=" eg. abc@gmail.com " name="email" required>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Enter Your Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="*****" name="password" required>
      </div>


      <div class="modal-footer">
        <button type="submit" class="btn btn-outline-primary" >Login</button>
      </div>
      </form>
    </div>
    </div>
  </div>
</div>
  <!--Admin Login Modal ends-->




 <!--Navigation bar simulator on mobile--> 
 <a href="#" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" id="myanchor" style="display: none;">nav simulator</a>
  <!--End of  Navigation bar simulator on mobile--> 

  <!--footer starts -->
<div style="margin-bottom:1cm">
  </div>
<div class="fixed-bottom bg-secondary-subtle" >
  <div class="container text-center" >
    <div class="row" >
      <div class="col order-last" >
        <h6 style="font-size:12px!important"><a href="https://wa.me/255698267662">Dozzer Web App Developer</a></h6>
      </div>
      <div class="col">
        <h6 style="font-size:12px!important">Designed And Developed By </h6>
      </div>
      <div class="col order-first">
        <h6 style="font-size:12px!important;">
        <a style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#login">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                    <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                  </svg>
          Admin Login
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&copy;2024 &nbsp; All right Reserved</h6>
      </div>
    </div>
  </div>
</div>
<!--footer ends-->



    </body>
    <!--pwa starts -->
    <script>
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker.register('/service-worker.js')
            .then(registration => {
              console.log('Service Worker registered with scope:', registration.scope);
            })
            .catch(error => {
              console.error('Service Worker registration failed:', error);
            });
        });
      }
    </script>
    

    <script>
      let deferredPrompt;
    
      window.addEventListener('beforeinstallprompt', (e) => {
        // Prevent the browser's default install prompt
        e.preventDefault();
        // Stash the event so it can be triggered later
        deferredPrompt = e;
        // Show the install button
        document.getElementById('installButton').style.display = 'block';
      });
    
      document.getElementById('installButton').addEventListener('click', () => {
        // Show the install prompt when the button is clicked
        if (deferredPrompt) {
          deferredPrompt.prompt();
          deferredPrompt.userChoice.then((choiceResult) => {
            if (choiceResult.outcome === 'accepted') {
              console.log('User accepted the install prompt');
            } else {
              console.log('User dismissed the install prompt');
            }
            deferredPrompt = null;
          });
        }
      });
    </script>
    <!--pwa ends -->

    <script>

        function about(){
          aboutdiv.style.display="block";
            homediv.style.display="none";
            halls.style.display="none";
            meals.style.display="none";
            contactdiv.style.display="none";
            accomodations.style.display="none";
            aboutmenu.style="border:1px solid rgb(238, 201, 68)!important";
            homemenu.style="border:1px solid transparent!important;";
            servicemenu.style="border:1px solid transparent!important;";
            contactmenu.style="border:1px solid transparent!important;";
            loginmenu.style="border:1px solid transparent!important";
           }

           function home(){
            homediv.style.display="block";
            aboutdiv.style.display="block";
            halls.style.display="none";
            meals.style.display="none";
            contactdiv.style.display="none";
            accomodations.style.display="none";
            homemenu.style="color:white!important";
            servicemenu.style="border:1px solid transparent!important;";
            contactmenu.style="border:1px solid transparent!important;";
            loginmenu.style="border:1px solid transparent!important";
           }

           function service1(){
            window.scrollTo({top:0,behavior:"smooth"})
            halls.style.display="block";
            aboutdiv.style.display="none";
            homediv.style.display="none";
            meals.style.display="none";
            accomodations.style.display="none";
            contactdiv.style.display="none";
            servicemenu.style="border:1px solid rgb(238, 201, 68)!important";
            homemenu.style="border:1px solid transparent!important";
            sub1.style="border:1px solid rgb(238, 201, 68)!important";
            sub2.style="border:1px solid transparent!important";
            sub3.style="border:1px solid transparent!important";
            style="border:1px solid transparent!important;";
            loginmenu.style="border:1px solid transparent!important";
           }

           function service2(){
            window.scrollTo({top:0,behavior:"smooth"})
            meals.style.display="block";
            aboutdiv.style.display="none";
            homediv.style.display="none";
            halls.style.display="none";
            accomodations.style.display="none";
            contactdiv.style.display="none";
            servicemenu.style="border:1px solid rgb(238, 201, 68)!important";
            homemenu.style="border:1px solid transparent!important";
            sub1.style="border:1px solid transparent!important";
            sub2.style="border:1px solid rgb(238, 201, 68)!important";
            sub3.style="border:1px solid transparent!important";
            contactmenu.style="border:1px solid transparent!important;";
            loginmenu.style="border:1px solid transparent!important";
           }

           function service3(){
            window.scrollTo({top:0,behavior:"smooth"})
            accomodations.style.display="block";
            meals.style.display="none";
            aboutdiv.style.display="none";
            homediv.style.display="none";
            halls.style.display="none";
            contactdiv.style.display="none";
            servicemenu.style="border:1px solid rgb(238, 201, 68)!important";
            homemenu.style="border:1px solid transparent!important";
            sub1.style="border:1px solid transparent!important";
            sub2.style="border:1px solid transparent!important";
            sub3.style="border:1px solid rgb(238, 201, 68)!important";
            contactmenu.style="border:1px solid transparent!important;";
            loginmenu.style="border:1px solid transparent!important";
           }

           function contact(){
            window.scrollTo({top:0,behavior:"smooth"})
            contactdiv.style.display="block";
            accomodations.style.display="none";
            meals.style.display="none";
            aboutdiv.style.display="none";
            homediv.style.display="none";
            halls.style.display="none";
            contactmenu.style="border:1px solid rgb(238, 201, 68)!important";
            servicemenu.style="border:1px solid transparent!important";
            homemenu.style="border:1px solid transparent!important";
            loginmenu.style="border:1px solid transparent!important";
           }
           function service4(){

           }
           
           window.addEventListener('popstate', function(event){
            var myanchor=document.getElementById('myanchor');
            myanchor.click();
        }
        )

        function view(){
          window.scrollTo({top:0,behavior:"smooth"})
          viewTable.style.display="block";
          manageTable.style.display="none";
          createTable.style.display="none";
          viewButton.classList="col btn btn-primary";
          manageButton.classList="col btn btn-outline-warning mygap";
          createButton.classList="col btn btn-outline-success mygap";
        }

        function manage(){
          window.scrollTo({top:0,behavior:"smooth"})
          viewTable.style.display="none";
          manageTable.style.display="block";
          createTable.style.display="none";
          manageButton.classList="col btn btn-warning mygap";
          viewButton.classList="col btn btn-outline-primary";
          createButton.classList="col btn btn-outline-success mygap";
        }

        function create(){
          window.scrollTo({top:0,behavior:"smooth"})
          createTable.style.display="block";
          viewTable.style.display="none";
          manageTable.style.display="none";
          createButton.classList="col btn btn-success mygap";
          manageButton.classList="col btn btn-outline-warning mygap";
          viewButton.classList="col btn btn-outline-primary";
        }


      document.addEventListener('click', function(e){
        if(!document.getElementById('navbarNavDropdown').contains(e.target) && document.getElementById('navbarNavDropdown').classList=='navbar-collapse mynav collapse show'){
          window.scrollTo({top:0,behavior:"smooth"})
          document.getElementById('mynavbar').click();
        }
      });

      function parseval(service,price){
        document.getElementById('service').value = service;
        document.getElementById('price').value = price;
        document.getElementById('meal').value = service;
        document.getElementById('mealprice').value = price;
        document.getElementById('room').value = service;
        document.getElementById('roomprice').value = price;
      }

    </script>
        <script>
        // Get the date input element
        var dateInput = document.getElementById('date');

        // Array of dates to highlight
        function phpArray(){
          return <?php echo json_encode(array('2024-05-22', '2024-05-24', '2024-05-26','2024-05-28')); ?>;
        }
        var dates = phpArray();
        console.log(dates); // Add more dates as needed

        // Add event listener to apply styling when the input changes
        dateInput.addEventListener('input', function() {
            // Get the selected date
            var selectedDate = dateInput.value;

            // Check if the selected date is in the array of dates
            if (dates.includes(selectedDate)) {
                // Apply styling to the input
                dateInput.classList.add('highlighted-date');
                document.getElementById('booked').style.display="block";
                document.getElementById('bookingbutton1').style.display="none";
            } else {
                // Remove styling if the selected date is not in the array
                dateInput.classList.remove('highlighted-date');
                document.getElementById('booked').style.display="none";
                document.getElementById('bookingbutton1').style.display="block";
            }
        });
    </script>

     <script>
        // Get the date input element
        var dateInput = document.getElementById('date2');

        // Array of dates to highlight
        function phpArray(){
          return <?php echo json_encode(array('2024-05-21', '2024-05-23', '2024-05-25','2024-05-27')); ?>;
        }
        var dates = phpArray();
        console.log(dates); // Add more dates as needed

        // Add event listener to apply styling when the input changes
        dateInput.addEventListener('input', function() {
            // Get the selected date
            var selectedDate = dateInput.value;

            // Check if the selected date is in the array of dates
            if (dates.includes(selectedDate)) {
                // Apply styling to the input
                dateInput.classList.add('highlighted-date');
                document.getElementById('booked2').style.display="block";
                document.getElementById('bookingbutton2').style.display="none";
            } else {
                // Remove styling if the selected date is not in the array
                dateInput.classList.remove('highlighted-date');
                document.getElementById('booked2').style.display="none";
                document.getElementById('bookingbutton2').style.display="block";
            }
        });
    </script>
</html>
