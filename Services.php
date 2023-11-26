<!DOCTYPE html>

<html>

<head>

  <title>Wedlock Studio</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="Services.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link href="http://fonts.cdnfonts.com/css/lovelyn" rel="stylesheet">

</head>

<body>
  <!-- navigation bar start-->

  <?php include('header.php'); ?>

  <?php
  include 'cookies.php';
  ?>

  <!-- navigation bar end-->


  <!-- For background video -->

  <video autoplay loop muted plays inline class="background-video">
    <source src="images/services.mp4" type="video/mp4">
  </video>

  <!-- For background video -->

  <!-- For content -->
  <div class="banner-content">
    <p>When yes means forever, <span> Make your day special</span></p>
    <button class="start-button"><a href="Services.php" class="s-button">Get Started</a></button>
  </div>

  <!-- For login form -->
  <!-- <div class="log">
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
  </div> -->

  <!-- For login form end-->

  <!-- For Sign-up form -->
  <!-- <div class="Sign-up">
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
  For Sign-up form end -->

  <div class="background">
    <!--Our Services-->
    <div class="ourservices">

      <div class="serviceText">
        <h1>Our Services</h1>
      </div>

      <div class="servicedetails">
        <img class="serviceImage"
          src="images/ser1.jpg"
          alt="">
        <p>
          "We provide amazing services..."
        </p>
      </div>

    </div>

    <br>
    <br>
    <br>
    <br>

    <!-- Grand Wedding -->
    <div id="container">

      <div class="package">

        <h1>Grand Wedding</h1>

        <p class="information">
          <br>
          "Cheeky Wedding stuff blah blah blah... Yes Wedding very good
          Entire Wedding package like akth, holud, biye, reception and what
          not."
        </p>

        <div class="buttonControl">

          <button class="button">
            <span class="price">4,00,000 Tk.</span>
            <span class="buy">Get now</span>
          </button>

        </div>

      </div>

      <div class="packageImage">

        <img src="images/ser2.jpg" alt="">

        <div class="info">
          <h2>Package Details</h2>
          <ul>
            <li>Includes all the services (i.e. Aakth, Holud, Wedding & Reception)</li>
            <li>Finest venue selection for each occasion</li>
            <li>Invitation card selection service for all the occasions</li>
            <li>S-tier Photographer and Decorator</li>
            <li>Premium quality catering service</li>
          </ul>
        </div>
      </div>

    </div>

    <br>
    <br>
    <br>
    <br>
    <!-- Paint it Yellow -->
    <div id="container">

      <div class="package">

        <h1>Paint it Yellow</h1>

        <p class="information">
          <br>
          "Holud, DJ, Nacha Nachi.. Oh yeaah..."
        </p>

        <div class="buttonControl">

          <button class="button">
            <a href="payment.php">
              <span class="price">1,00,000 Tk.</span>
              <span class="buy">Get now</span>
            </a>
          </button>

        </div>

      </div>

      <div class="packageImage">

        <img src="images/ser3.jpg" alt="">

        <div class="info">
          <h2>Package Details</h2>
          <ul>
            <li>Providing S-tier Decorators</li>
            <li>Phenomenal music artist for an upbeat environment</li>
            <li>Expert photographers for capturing the best moments</li>
            <li>Premium quality catering service (Including all the sweets)</li>

          </ul>
        </div>
      </div>

    </div>

    <br>
    <br>
    <br>
    <br>
    <!-- Engaged for Eternity -->
    <div id="container">

      <div class="package">

        <h1>Engaged for Eternity</h1>

        <p class="information">
          <br>
          "My... PRECIOUUSSS!!!"
        </p>

        <div class="buttonControl">

          <button class="button">
            <span class="price">1,00,000 Tk.</span>
            <span class="buy">Get now</span>
          </button>

        </div>

      </div>

      <div class="packageImage">

        <img
          src="images/ser4.jpg"
          alt="">

        <div class="info">
          <h2>Package Details</h2>
          <ul>

            <li>Providing S-tier Decorators</li>
            <li>Expert photographers for capturing the best moments</li>
            <li>Premium quality catering service (Including all the sweets)</li>

          </ul>
        </div>

      </div>

    </div>

    <br>
    <br>
    <br>
    <br>

    <!-- The Awaited Moment -->
    <div id="container">

      <div class="package">

        <h1>The Awaited Moment</h1>

        <p class="information">
          <br>
          "WELL WELL WELL.. Finally"
        </p>

        <div class="buttonControl">

          <button class="button">
            <span class="price">1,00,000 Tk.</span>
            <span class="buy">Get now</span>
          </button>

        </div>

      </div>

      <div class="packageImage">

        <img
          src="images/ser5.jpg"
          alt="">

        <div class="info">
          <h2>Package Details</h2>
          <ul>

            <li>Providing S-tier Decorators</li>
            <li>Invitation card selection service for all the occasions</li>
            <li>Expert photographers for capturing the best moments</li>
            <li>Premium quality catering service (Including all the sweets)</li>

          </ul>
        </div>

      </div>

    </div>

    <br>
    <br>
    <br>
    <br>

    <!-- Customized Services -->
    <div class="ourservices">

      <div class="customizedService">
        <h1>
          <br>
          Want Your Own Customized Plan?
        </h1>
      </div>

      <div class="customizedservicedetails">

        <p>
          "Make Your Own Plan..."
        </p>

        <button class="button">
          <a href="Customize.php">
            <span class="price">Over here</span>
            <span class="buy">Click now</span>
          </a>
        </button>

      </div>

    </div>

  </div>

  <!-- Footer start-->

  <?php include('footer.php'); ?>

  <!-- Footer  end-->

</body>

</html>