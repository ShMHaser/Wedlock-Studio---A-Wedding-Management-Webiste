<!DOCTYPE html>
<html>

<head>
  <title>Wedlock Studio</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>



<!-- navigation bar start-->

<?php include('header.php'); ?>

<!-- navigation bar end-->

<body>
  <!-- For background video -->

  <video autoplay loop muted plays inline class="background-video">
    <source src="images/wedding.mp4" type="video/mp4">
  </video>

  <!-- For background video -->



  <!-- For content -->
  <div class="banner-content">
    <p>When yes means forever, <span> Make your day special</span></p>
    <button class="start-button"><a href="Services.php" class="s-button">Get Started</a></button>
  </div>

 


  <main>

    <!-- Service start -->
    <section class="service">

      <div class="service-title">
        <h1 class="s-title">Our Popular Services</h1>
      </div>

      <div class="s-container">
        <div class="card ">
          <div class="card__inner hovercard">
            <div class="front face">
              <div class="heading">
                <h2>Basic</h2>
              </div>
              <div class="description">
                <h3>See the plan</h3>
              </div>
            </div>
            <div class="back face">
              <div class="heading">
                <h2>Basic</h2>
              </div>
              <ul>
                <li>Providing Basic Decorators</li>
                <li>Photograpghers for capturing the best moments</li>
                <li>Qualityful catering service</li>
              </ul>
              <div class="price">
                <h3>1,00,000 TK</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="card ">
          <div class="card__inner hovercard">
            <div class="front face">
              <div class="heading">
                <h2>Standard</h2>
              </div>
              <div class="description">
                <h3>See the plan</h3>
              </div>
            </div>
            <div class="back face">
              <div class="heading">
                <h2>Standard</h2>
              </div>
              <ul>
                <li>Providing A-tier Decorators</li>
                <li>Professional photograpghers for capturing the best moments</li>
                <li>Qualityful catering service (Including sweets)</li>
              </ul>
              <div class="price">
                <h3>1,00,000 TK</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="card ">
          <div class="card__inner hovercard">
            <div class="front face">
              <div class="heading">
                <h2>Premium</h2>
              </div>
              <div class="description">
                <h3>see the plan</h3>
              </div>
            </div>
            <div class="back face">
              <div class="heading">
                <h2>Premium</h2>
              </div>
              <ul>
                <li>Providing S-tier Decorators</li>
                <li>Expert photograpghers for capturing the best moments</li>
                <li>Premium quality catering service (Including all the sweets)</li>
              </ul>
              <div class="price">
                <h3>4,00,000 TK</h3>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- Service end -->
    

    <!-- Gallery start -->
    <section class="gallery">
      <div id="hero">

        <div class="h-container">
          <div class="h-info">
            <h1 class="h-h1">Discover</h1>
            <p class="h-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              sed do eiusmod tempor incididunt ut labore et dolore</p>
            <button class="h-button"><a href="gallery.php">Gallery</a></button>
          </div>
        </div>

        <div class="h-slider">
          <img src="images/left-arrow.png" id="prev">
          <div class="h-preview">
            <img src="images/small1.jpg" class="active slider-thumbnail" loading="lazy">
            <img src="images/small2.jpg" class="slider-thumbnail" loading="lazy">
            <img src="images/small3.jpg" class="slider-thumbnail" loading="lazy">
            <img src="images/small4.jpg" class="slider-thumbnail" loading="lazy">
            <img src="images/small5.jpg" class="slider-thumbnail" loading="lazy">
          </div>
          <img src="images/right-arrow.png" id="next">
        </div>

      </div>

    </section>
    <!-- Gallery end -->

    <br>
    <br>
    <!-- about us start -->
    <section class="aboutUs">
      <div class="about-us">
        <div class="a-container">
          <h1>About Us</h1>
          <p class="a-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum,
            eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi
            neque voluptates sit deleniti autem error eos totam nisi neque.
          </p>
          <div class="a-skills">
            <span>Venue</span>
            <span>Catering</span>
            <span>Photography</span>
          </div>
        </div>
      </div>
    </section>
    <!-- about us end -->

    <!-- Footer start-->

    <?php include('footer.php'); ?>

    <!-- Footer  end-->
</body>

</html>


<script>

var prev = document.getElementById("prev");
var next = document.getElementById("next");
var thumbnail = document.getElementsByClassName("slider-thumbnail");
var hero = document.getElementById("hero");

var backgroundImg = new Array(
  "images/bg1.jpg",
  "images/bg2.jpg",
  "images/bg3.jpg",
  "images/bg4.jpg",
  "images/bg5.jpg"
);

//for next button

let i = 0;
next.onclick = function(){
  if(i < 4){
    hero.style.backgroundImage = 'url("'+backgroundImg[i+1]+'")';   //to change background into next image
    thumbnail[i+1].classList.add("active");   //to add active status to current image
    thumbnail[i].classList.remove("active");  //to remove active status from previous image
    i++;
  }
}

//for previous button

prev.onclick = function(){
  if(i > 0){
    hero.style.backgroundImage = 'url("'+backgroundImg[i-1]+'")';
    thumbnail[i-1].classList.add("active");
    thumbnail[i].classList.remove("active");
    i--;
  }
}


</script>

</main>