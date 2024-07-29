<?php
include "data.php";

?>
<!DOCTYPE html><html lang="zxx"><head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gazeti La Enendeni</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="images/fevicon.png">
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <style>
    #container {
        width: 10cm;
        height: 8cm;
        overflow: hidden;
    }

    #preview {
        width: 100%;
        height: 100%;
    }
</style>
  </head>

  <body style="background-color:rgba(33, 44, 40, 0.164);"> 
    <div class="container-scroller">
      <div class="main-panel">
        <header id="header">
          <div class="container">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="d-flex justify-content-between align-items-center navbar-top">
                <div>
                  <a class="navbar-brand" href="../"><img src="images/logo.png" alt=""></a>
                </div>
                <div class="d-flex" >
                  <ul class="social-media" style="transform:scale(2)">
                  <li >
                      <a href="../" style="background-color:black!important;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                         <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                      </svg>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/gazeti_enendeni?igsh=MTZhbXFzdWZtcTI0Nw==">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/profile.php?id=100079638696887">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                   
          <!--          <li>
                      <a href="#">
                        <i class="mdi mdi-linkedin"></i>
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>  -->
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom-menu">
                <button class="navbar-toggler" type="button" style="color:black" onclick="window.location.href='../'">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
</svg>

                </button>

           
              </div>
            </nav>

            <!-- partial -->
          </div>
        </header>
        <div class="container">
          <div class="row">
              <div class="owl-carousel owl-theme" id="main-banner-carousel">
                
 <?php   
 $i=1;
 foreach($data1 as $posts){
if($i<6){
  $i++;
echo '
              <div class="item">
                  <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                      <h1 class="font-weight-bold">
                        '.$posts["title"].'
                      </h1>
                      <h5 class="font-weight-normal  m-0">
                      '.$posts["description"].'
                      </h5>
                    </div>
                    <div class="carousel-image" >
                      <img class="rounded mx-auto d-block" src="../cmc-admin/gazeti/'.$posts["image"].'" alt="" style="height:10cm;">
                    </div>
                  </div>
                </div>
';
              }
            }
?>





             
              </div>
          </div>
          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">Chapisho Za Gazeti</h3>
                </div>
              </div>
            </div>
            <div class="row">
      
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->
        <div class="container">
          <div class="card-group"> 
        <?php   
   $i=2;
 foreach($data2 as $posts){
  if($i%2==0){
    echo '<div class="card-group">';
    $i=0;
    }
echo ' 
  <div class="card image-hover" style="margin-left:10px;margin-right:10px;border-radius:20px">
    <img src="../cmc-admin/gazeti/'.$posts["image"].'" class="card-img-top " alt="..." style="height:8cm; width:16cm">
    <div class="card-body"><br>
      <h5 class="card-title">'.$posts["title"].'</h5>
      <p class="card-text">	
      <span class="d-inline-block text-truncate" style="max-width: 150px;"> '.$posts["description"].'</span>
      <br>
      <a class="font-weight-bold text-primary pt-2" data-bs-toggle="modal" data-bs-target="#view'.$posts['id'].'" style="cursor:pointer">Read More</a>
      </p>
    </div>
  </div>

  <!--view modal-->
  <div class="modal fade" id="view'.$posts['id'].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">'.$posts['title'].'</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="../cmc-admin/gazeti/'.$posts['image'].'" class="img-fluid" alt="'.$posts['image'].'"><br><br>
          '.$posts['description'].'
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--End of view modal-->
  ';
  $i++;
  if($i%2==0){
  $i=0;
  echo '  </div><br>';
  }

 }
 echo "</div>";
  ?>


          </div>
        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="container ">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between">
                  <img src="images/logo.png" class="footer-logo" alt="">
                  <div class="d-flex justify-content-end footer-social">
                    <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">Follow on</h5>
                    <ul class="social-media">
                    <li>
                      <a href="https://www.instagram.com/gazeti_enendeni?igsh=MTZhbXFzdWZtcTI0Nw==">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/profile.php?id=100079638696887">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
               <!--       <li>
                        <a href="#">
                          <i class="mdi mdi-youtube"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-linkedin"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-twitter"></i>
                        </a>
                      </li>  -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--login modal -->
 <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">For Administrators Only !</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../cmc-admin/checkgazetiadmin.php" method="post">
      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Enter Your Email</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" eg. abc@gmail.com " name="email" required>
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
            <!--login modal ends-->
            <div class="row">
              <div class="col-sm-12">
                <div class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom">
                  <ul class="footer-horizontal-menu fixed-bottom" style="background-color:#e6e9ed;">
                    <li data-bs-toggle="modal" data-bs-target="#login"><a href="#" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                    <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                  </svg>  
                    Admin Login</a>
                  </li>
                    <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    <li><a href="#">&copy; 2024All Right Reserved</a></li>
                    <li><a href="#">Designed By</a></li>
                    <li><a href="https://wa.me/255698267662" target="_blank" class="text-dark">Dozzer WebApp Developer </a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/demo.js"></script>
    <!-- End custom js for this page-->
  

</body></html>