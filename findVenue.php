<!DOCTYPE html>
<html lang="en">
<head>
  <title>FINDVENUE </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container-fluid">
        <nav class="navbar navbar-light" style="background-color: #e28ad1">
            <div class="container-fluid">
                <img src="images/logo.png" alt="Los Angeles" class="logo" style="width:5%"  >
                <a class="navbar-brand" >WEDLOCK</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" >ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" >SERVICES</a>
                  </li>
                </ul>
                <div class="dropdown">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                    FIND VENUE
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Mirpur</a></li>
                    <li><a class="dropdown-item" href="#">Basundhara,R/A</a></li>
                    <li><a class="dropdown-item" href="#">Farmgate</a></li>
                  </ul>
                </div>
                <!--<form class="d-flex">
                  <input class="form-control me-2" type="text" placeholder="SEARCH VENUE BY LOCATION">
                  <button class="btn btn-primary" type="button">FIND VENUE</button>
                </form> -->
              </div>
            </div>
          </nav>
       </div>

       <div class="container-fluid">
            <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/1.jpg" class="img-thumbnail" class="img-fluid" class="mx-auto d-block"  style="width: 100%; height=80vh">
      </div>
      <div class="carousel-item">
        <img src="images/7.jpg" class="img-thumbnail" class="img-fluid" class="mx-auto d-block" style="width: 100%; height=80vh" >
      </div>
      <div class="carousel-item">
        <img src="images/11.jpg"  class="img-thumbnail" class="img-fluid" class="mx-auto d-block" style="width: 100%; height=80vh">
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>



      <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("images");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }


        </script>

</body>
</html>
