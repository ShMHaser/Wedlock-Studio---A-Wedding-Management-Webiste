<!DOCTYPE html>

<html>

<head>

  <title>Wedlock Studio</title>
  <link href="services_search.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link href="http://fonts.cdnfonts.com/css/lovelyn" rel="stylesheet">

</head>

<body>



  <!-- For background video -->

  <img src="images/a.jpg" class="background-video" />
  <!-- For background video -->

  <!-- For content -->
  <div class="banner-content">

    <!-- service sEARCH Section Starts Here -->
    <?php
    include("config.php");
    if (isset($_POST['input'])) {

      $search = $_POST['input'];
    }
    ?>
    <h2>Services on Your Search <a href="#" class="text-white">"
        <?php echo $search; ?>"
      </a></h2>

  </div>

  <!-- service sEARCH Section Ends Here -->




  <div class="background">

    <?php

    $sql = "SELECT *FROM services_category WHERE wedtype LIKE '%$search%' OR description LIKE '%$search%'";

    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);

    if ($count > 0) {
      while ($row = mysqli_fetch_assoc($res)) {
        $id = $row['id'];
        $wedtype = $row['wedtype'];
        $price = $row['price'];
        $preview_image = $row['preview_image'];
        $description = $row['description'];
        $detail_1 = $row['detail_1'];
        $detail_2 = $row['detail_2'];
        $detail_3 = $row['detail_3'];
        $detail_4 = $row['detail_4'];
        $detail_5 = $row['detail_5'];
    ?>


    <div id="container">

      <div class="package">

        <h1>
          <?php echo $wedtype; ?>
        </h1>

        <p class="information">
          <br>
          <?php echo $description; ?>
        </p>

        <div class="buttonControl">

          <button class="button">
            <span class="price">
              <?php echo $price; ?>
            </span>
            <span class="buy">Get now</span>
          </button>

        </div>

      </div>

      <div class="packageImage">
        <?php
        if ($preview_image == "") {
          echo " <div class= 'error'> Image not available </div>";

        } else {
        ?>
        <img src=" <?php echo $preview_image; ?>" alt="">

        <?php
        }

        ?>


        <div class="info">
          <h2>Package Details</h2>
          <ul>
            <li>
              <?php echo $detail_1; ?>
            </li>
            <li>
              <?php echo $detail_2; ?>
            </li>
            <li>
              <?php echo $detail_3; ?>
            </li>
            <li>
              <?php echo $detail_4; ?>
            </li>
            <li>
              <?php echo $detail_5; ?>
            </li>
          </ul>
        </div>
      </div>

    </div>

    <?php
      }

    } else {
      echo "<div class='error'>Not Found</div>";
    }
    ?>


    <br>
    <br>

</body>

</html>