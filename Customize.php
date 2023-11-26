<!DOCTYPE html>

<html>

<head>

  <title>Wedlock Studio</title>

  <link href="Customize.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link href="http://fonts.cdnfonts.com/css/lovelyn" rel="stylesheet">

</head>

<body>

  <div class="Wed">

    <!-- For navigation -->
    <nav class="nav">

      <img src="images/logo.png" class="logo" />
      <h3 class="title">Wedlock Studio</h3>
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="Services.php">SERVICES</a></li>
        <li><a href="inspiration.html">INSPIRATION</a></li>
        <li><a href="gallery.html">GALLERY</a></li>
        <li><a href="About.html">ABOUT</a></li>
        <li><label for="show">LOGIN</label></li>
        <li><label for="view">SIGN UP</label></li>
        <li>
          <div class="search-box">
            <input id="textbox" type="text" placeholder="Search.." />
            <a href="#"><i class="fas fa-search"></i></a>
          </div>
        </li>
      </ul>
      <a href="admin.html"> <img src="images/admin.png" class="admin" /></a>
    </nav>
  </div>

  <!-- For background video -->

  <video autoplay loop muted plays inline class="background-video">
    <source src="images/about.mp4" type="video/mp4">
  </video>

  <!-- For background video -->

  <!-- For content -->
  <div class="banner-content">
    <p>When yes means forever, <span> Make your day special</span></p>
    <button class="start-button"><a href="Services.html" class="s-button">Get Started</a></button>
  </div>

  <!-- For login form -->
  <div class="log">
    <input type="checkbox" id="show" />
    <div class="container">
      <div class="text">Login Form</div>
      <form action="#">
        <div class="data">
          <label>Email or phone</label>
          <input type="text" required />
        </div>
        <div class="data">
          <label>Password</label>
          <input type="password" required />
        </div>
        <div class="forget-pass"><a href="#">Forget Password?</a></div>
        <div class="btn">
          <button type="submit">LOGIN</button>
        </div>
        <div class="link">New here? <a href="#">Sign up Now</a></div>
      </form>
    </div>
  </div>

  <!-- For login form end-->


  <!-- For Sign-up form -->
  <div class="Sign-up">
    <input type="checkbox" id="view" />
    <div class="container">
      <div class="text">Sign up Form</div>
      <form action="#">
        <div class="data">
          <label>First name</label>
          <input type="text" required />
        </div>
        <div class="data">
          <label>Last name</label>
          <input type="text" required />
        </div>
        <div class="data">
          <label>Email or phone</label>
          <input type="text" required />
        </div>
        <div class="data">
          <label>Password</label>
          <input type="password" required />
        </div>
        <div class="data">
          <label>Confirm Password</label>
          <input type="password" required />
        </div>
        <div class="btn">
          <button type="submit">SIGN UP</button>
        </div>
        <div class="link"><a href="#">Already have an account?</a></div>
      </form>
    </div>
  </div>
  </div>
  <!-- For Sign-up form end -->

  <div class="background">
    <!--Customize-->
    <div class="ourservices">

      <div class="serviceText">
        <h2>Customize the services
          <br>
          You want
        </h2>
      </div>

      <div class="servicedetails">
        <button class="button">
          <a href="findVenue.html" class="s-button">
            <span class="price">Venue</span>
            <span class="buy">Find Nearest One</span>
        </button>
        <br><br><br>
        <button class="button">
          <span class="price">Photographer</span>
          <span class="buy">View</span>
        </button>
        <br><br><br>
        <button class="button">
          <a href="findVenue.html">
            <span class="price">Catarer</span>
            <span class="buy">Choose your catarer</span>
          </a>
        </button>
      </div>

    </div>

  </div>

  <span>
  </span>

  <!-- footer start -->
  <footer class="footer">
    <div class="f-container">
      <div class="f-wrapper">
        <div class="footer-widget">
          <a href="#">
            <img src="images/logo.png" class="f-logo" />
          </a>
          <p class="f-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos
            deserunt magni recusandae ut! Natus?
          </p>
          <ul class="f-socials">
            <li>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-widget">
          <h6>Quick Links</h6>
          <ul class="f-links">
            <li><a href="index.html">home</a></li>
            <li><a href="About.html">about</a></li>
            <li><a href="Services.html">service</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="#">contact</a></li>
          </ul>
        </div>
        <div class="footer-widget">
          <h6>Services</h6>
          <ul class="f-links">
            <li><a href="Services.html">Wedding Venue</a></li>
            <li><a href="Services.html">Catering</a></li>
            <li><a href="Services.html">Photography</a></li>
          </ul>
        </div>
        <div class="footer-widget">
          <h6>Help &amp; Support</h6>
          <ul class="f-links">
            <li><a href="#">support center</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">terms &amp; conditions</a></li>
          </ul>
        </div>
      </div>
      <div class="copyright-wrapper">
        <p>
          Designed and Developed by
          <a href="About.html" class="g6">Group Six</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer end -->

</body>

</html>