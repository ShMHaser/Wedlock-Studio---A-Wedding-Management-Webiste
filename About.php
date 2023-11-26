<!DOCTYPE html>

<html>

<head>

  <title>Wedlock Studio</title>

  <link href="About.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link href="http://fonts.cdnfonts.com/css/lovelyn" rel="stylesheet">

</head>

<body>


  <!-- navigation bar start-->

  <?php include('header.php'); ?>

  <!-- navigation bar end-->

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
    <!--About Us-->
    <div class="ourservices">

      <div class="serviceText">
        <h1>About Us</h1>
      </div>

      <div class="servicedetails">
        <p>
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
          in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
          officia deserunt mollit anim id est laborum."
        </p>
      </div>

    </div>

  </div>

  <span>
  </span>

  <!-- Footer start-->

  <?php include('footer.php'); ?>

  <!-- Footer  end-->



</body>

</html>