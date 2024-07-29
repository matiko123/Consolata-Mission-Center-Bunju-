<?php include "data.php"; ?>
<html>
    <head>
        <title>CMC Administration Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

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
		  background-image: url('../../img/Logo.png');
		  background-size: contain;

		}
	  
		.back {
		  background-image: url('../../img/virgin-logo.png');
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
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" id="mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse mynav " id="navbarNavDropdown">
            <ul class="navbar-nav mydropdown mymedia" >
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
        
              <li class="nav-item"   data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" id="loginmenu" >
                <a class="nav-link" href="#" >
                <svg  style="color: transparent" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
  <path d="M7.5 1v7h1V1z"/>
  <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812"/>
</svg>
                  
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</div>


  
    <!--Admin Container-->
    <div class="container border border-primary-subtle" style="background-color: white;border-radius: 10px;display: block;" id="adminview" >
      <!--Buttons starts-->
      <div class="container px-4 text-center" style="margin-top: 0.5cm;">
        <div class="row gx-5">
          <div class="col btn btn-outline-primary" onclick="view()" id="viewButton">
           <div class="p-3">All Posts <sup><span class="badge text-bg-danger"><?php echo count($data1) ?></span></sup></div>
          </div>
          <div class="col btn btn-outline-success mygap" onclick="create()" id="createButton" >
            <div class="p-3">Create New Post</div>
           </div>
          <div class="col btn btn-outline-warning mygap" onclick="manage()" id="manageButton">
            <div class="p-3 ">Manage Posts</div>
          </div>
        </div>
      </div>
      <!--Buttons Ends-->
      <!--view table starts-->
      <div style="display: block;max-height:15cm;overflow-y:auto" id="viewTable">
      <table class="table table-hover" style="margin-top: 0.5cm;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">View</th>
          </tr>
        </thead>
        <tbody>
        <?php
    foreach ($data1 as $entry) {
    echo '
          <tr>
            <th scope="row">'.$entry['id'].'</th>
            <td><img src="'.$entry['image'].'" class="img-fluid mytableimage" alt="'.$entry['image'].'"></td>
            <td>'.$entry['title'].'</td>
            <td><span class="d-inline-block text-truncate" style="max-width: 150px;">'.$entry['description'].'</span></td>
            <td>
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view'.$entry['id'].'">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                </svg>
                View
              </button><span class="d-inline-block text-truncate" style="max-width: 150px;">
            </td>
          </tr>
          
          <!--view modal-->
<div class="modal fade" id="view'.$entry['id'].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">View Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>'.$entry['title'].'</h2><br>

        <img src="'.$entry['image'].'" class="img-fluid" alt="'.$entry['image'].'"><br><br>

        '.$entry['description'].'
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--End of view modal-->

          ';
    }

    ?>
        </tbody>
      </table>
    </div>
      <!--View Table ends-->
      <!--Update Table Starts-->
      <div style="display: none;max-height:15cm;overflow-y:auto" id="manageTable">
      <table class="table table-hover" style="margin-top: 0.5cm;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
        foreach ($data1 as $entry2) {
    echo '
          <tr>
            <th scope="row">'.$entry2["id"].'</th>
            <td><img src="'.$entry2["image"].'" class="img-fluid mytableimage" alt="..."></td>
            <td>'.$entry2["title"].'</td>
            <td><span class="d-inline-block text-truncate" style="max-width: 150px;">'.$entry2["description"].'</span></td>
            <td>
              <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edit'.$entry2["id"].'">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                </svg>
                Edit
              </button>
            </td>
            <td>
              <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete'.$entry2["id"].'">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                </svg>
                Delete
              </button>
            </td>
          </tr>

          <!--Delete Alert Starts-->
          <div class="modal fade" id="delete'.$entry2["id"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                  Are You Sure You want To Delete '.$entry2["title"].'
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
                      <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
                    </svg>
                    Cancel
                  </button>
                  <form action="deletepost.php" method="post">
                  <input type="hidden" name="id" value="'.$entry2["id"].'" >
                  <button type="submit" class="btn btn-outline-danger" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                    </svg>
                    Yes
                  </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Delete alert ends -->

          <!--Edit modal-->
<div class="modal fade" id="edit'.$entry2["id"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">EDIT POST</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

<div class="container">
      <form action="updatepost.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Magazine Title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="'.$entry2["title"].'" pattern="[a-zA-Z0-9\s]+" title="Please enter alphanumeric characters only!"  name="title">
          <input type="hidden" name="id" value="'.$entry2["id"].'">
        </div>
        <div class="mb-3">
          <img src="'.$entry2["image"].'" class="img-fluid mytableimage" alt="..."><br><br>
          <label for="exampleInputPassword1" class="form-label">Image</label>
          <input type="file" class="form-control" name="image" id="image" value="'.$entry2["image"].'">
        </div>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Descrition of The Magazine" id="floatingTextarea2" style="height: 100px" name="description">
            '.$entry2["description"].'
          </textarea>
        </div><br>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-primary" >Update</button>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>


<div class="modal fade" id="updated" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"  style="border:solid rgb(58, 183, 255)">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">
          <svg style="color:rgb(31, 121, 231)" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
          </svg>
          Uploaded
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<!--End of Edit modal-->
          
          ';
        }
        ?>
        </tbody>
      </table>
    </div>
      <!--Update Table ends-->
      
<!--create table starts-->
<div style="display: none;margin-top: 1cm;margin-bottom: 1cm;" id="createTable">
<form action="insertpost.php" method="post"  enctype="multipart/form-data">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Title Of The Magazine" pattern="[a-zA-Z0-9\s]+" title="Please enter alphanumeric characters only!"  name="title" required>
    </div>
    <div class="col">
      <input type="file" class="form-control" placeholder="Upload Image"  name="image" id="image" required>
    </div>
  </div><br>
  <div class="form-floating">
    <textarea class="form-control" placeholder="Descrition of The Magazine" id="floatingTextarea2" style="height: 100px" name="description" required></textarea>
    <label for="floatingTextarea2">Descriptions</label>
  </div><br>
  <div class="modal-footer">
  <button type="submit" class="btn btn-outline-primary btn-lg "  >
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708z"/>
      <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
    </svg>
    Upload 
  </button>
  </form>
  </div>
</div>
<!--create table ends-->
      </div>
        <!--Admin container ends-->



    <!-- delete success starts -->

<div class="modal fade" id="donemodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
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
      <!-- update success starts -->

<div class="modal fade" id="passwordupdated" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"  style="border:solid green">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">
          <svg style="color:green" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
          </svg>
          Password Updated
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
  <!-- update Alert ends-->
 <!--Done  modal-->
<button data-bs-toggle="modal" data-bs-target="#passwordupdated" id="doneupdate" style="display:none">Done</button>
<!--End of done modal-->
<!--Done  modal-->
<button data-bs-toggle="modal" data-bs-target="#donemodal" id="done" style="display:none">Done</button>
<!--End of done modal-->



 <!--Navigation bar simulator on mobile--> 
 <a href="#" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" id="myanchor" style="display: none;">nav simulator</a>
  <!--End of  Navigation bar simulator on mobile--> 

  <!--Admin Passwrd chanage Starts -->
  <div class="modal fade" id="changepassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"  style="border:solid rgb(0, 179, 255)">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Change Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../../control/updategazetipassword.php" method="post">
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
        &nbsp;&nbsp;&nbsp;&nbsp;&copy;2024 &nbsp; All right Reserved</h6>
      </div>
    </div>
  </div>
</div>
<!--footer ends-->



    </body>
    

    <script>
      if(window.location.href.includes("gazeti/?updated")){
            function doneclick1(){
              document.getElementById("doneupdate").click();
            }
            doneclick1();
           }
           
     if(window.location.href.includes("gazeti/?deleted")){
            function doneclick(){
              document.getElementById("done").click();
            }
            doneclick();
           }


        function about(){
          adminview.style.display="none";
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

           function service1(){
            window.scrollTo({top:0,behavior:"smooth"})
            adminview.style.display="none";
            halls.style.display="block";
            aboutdiv.style.display="none";
            homediv.style.display="none";
            meals.style.display="none";
            accomodations.style.display="none";
            contactdiv.style.display="none";
            servicemenu.style="border:1px solid rgb(238, 201, 68)!important";
            aboutmenu.style="border:1px solid transparent!important";
            homemenu.style="border:1px solid transparent!important";
            sub1.style="border:1px solid rgb(238, 201, 68)!important";
            sub2.style="border:1px solid transparent!important";
            sub3.style="border:1px solid transparent!important";
            style="border:1px solid transparent!important;";
            loginmenu.style="border:1px solid transparent!important";
           }

           function service2(){
            window.scrollTo({top:0,behavior:"smooth"})
            adminview.style.display="none";
            meals.style.display="block";
            aboutdiv.style.display="none";
            homediv.style.display="none";
            halls.style.display="none";
            accomodations.style.display="none";
            contactdiv.style.display="none";
            servicemenu.style="border:1px solid rgb(238, 201, 68)!important";
            aboutmenu.style="border:1px solid transparent!important";
            homemenu.style="border:1px solid transparent!important";
            sub1.style="border:1px solid transparent!important";
            sub2.style="border:1px solid rgb(238, 201, 68)!important";
            sub3.style="border:1px solid transparent!important";
            contactmenu.style="border:1px solid transparent!important;";
            loginmenu.style="border:1px solid transparent!important";
           }

           function service3(){
            window.scrollTo({top:0,behavior:"smooth"})
            adminview.style.display="none";
            accomodations.style.display="block";
            meals.style.display="none";
            aboutdiv.style.display="none";
            homediv.style.display="none";
            halls.style.display="none";
            contactdiv.style.display="none";
            servicemenu.style="border:1px solid rgb(238, 201, 68)!important";
            aboutmenu.style="border:1px solid transparent!important";
            homemenu.style="border:1px solid transparent!important";
            sub1.style="border:1px solid transparent!important";
            sub2.style="border:1px solid transparent!important";
            sub3.style="border:1px solid rgb(238, 201, 68)!important";
            contactmenu.style="border:1px solid transparent!important;";
            loginmenu.style="border:1px solid transparent!important";
           }

           function contact(){
            window.scrollTo({top:0,behavior:"smooth"})
            adminview.style.display="none";
            contactdiv.style.display="block";
            accomodations.style.display="none";
            meals.style.display="none";
            aboutdiv.style.display="none";
            homediv.style.display="none";
            halls.style.display="none";
            contactmenu.style="border:1px solid rgb(238, 201, 68)!important";
            servicemenu.style="border:1px solid transparent!important";
            aboutmenu.style="border:1px solid transparent!important";
            homemenu.style="border:1px solid transparent!important";
            loginmenu.style="border:1px solid transparent!important";
           }
           function service4(){

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

    </script>
</html>