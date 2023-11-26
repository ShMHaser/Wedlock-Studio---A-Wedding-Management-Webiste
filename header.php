<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

if (empty($_SESSION['user_id'])) {

?>

<div class="Wed">
    <input type="checkbox" id="check">
    <!-- navigation bar start-->
    <nav class="nav">
        <label for="check" class="menu-icon">
            <span class="fas fa-bars" id="menu-bar"></span>
            <span class="fas fa-times" id="menu-times"></span>
        </label>
        <img src="images/logo.png" class="logo" />
        <h3 class="title">Wedlock Studio</h3>
        <ul class="nav1">
            <li><a href="index.php">HOME</a></li>
            <li><a href="Services.php">SERVICES</a></li>
            <li><a href="inspiration.php">INSPIRATION</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="About.php">ABOUT</a></li>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="signup.php">SIGN UP</a></li>
        </ul>
        <div class="search-box">
            <input id="textbox" type="search" placeholder="Search services..." required />
            <label class="search-icon">
                <span class="fas fa-search"></span>
            </label>
        </div>


        <a href="admin.php"> <img src="images/admin.png" class="admin" /></a>
    </nav>

</div>
<!-- navigation bar end-->

<?php
} else {
?>

<div class="Wed">
    <input type="checkbox" id="check">
    <!-- For navigation -->
    <nav class="nav">
        <label for="check" class="menu-icon">
            <span class="fas fa-bars" id="menu-bar"></span>
            <span class="fas fa-times" id="menu-times"></span>
        </label>
        <img src="images/logo.png" class="logo" />
        <h3 class="title">Wedlock Studio</h3>
        <ul class="nav1">
            <li><a href="index.php">HOME</a></li>
            <li><a href="Services.php">SERVICES</a></li>
            <li><a href="inspiration.php">INSPIRATION</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="About.php">ABOUT</a></li>
            <li><a href="logout.php">LOG OUT</a></li>

        </ul>
        <div class="search-box">
            <form action="services_search.php" method="POST">
                <input id="textbox" type="search" name="search" placeholder="Search services..." required />
                <label class="search-icon">
                    <span class="fas fa-search"></span>
                </label>
            </form>
        </div>

        <a href="admin.php"> <img src="images/admin.png" class="admin" /></a>
    </nav>
</div>

<?php
}


?>

<!--Live search start-->
<div id="searchresult"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#textbox").keyup(function () {
            var input = $(this).val();
            //alert(input);
            if (input != "") {
                $.ajax({
                    url: "services_search.php",
                    method: "POST",
                    data: { input: input },

                    success: function (data) {
                        $("#searchresult").html(data);
                    }

                });
            }
            else {
                $("#searchresult").css("display", "none");
            }
        });
    });

</script>

<!--Live search end-->