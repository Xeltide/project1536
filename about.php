<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>About</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="./images/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="./images/favicon-16x16.png" sizes="16x16" />

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT –––––––––––––––––––––––––––––––––––––––– -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/about.css">

</head>
<body>

  <!-- Navigation Bar
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <?php
    include("header.php");
  ?>
  
  <!-- Page Content
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container">
      <div class="row">
        <div class="five columns" id="aboutSite">
          <h3>About</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut mi turpis. Nulla ac accumsan orci. Vivamus sed lectus dolor. Ut interdum imperdiet tortor in porta. Suspendisse semper interdum sagittis. Vestibulum et viverra ex. Nunc rhoncus arcu odio, vitae dignissim nunc semper sit amet.</p>
          <h5 class="overrideHColor">Get In Touch</h5>
          <a href="#"><img src="images/facebook.gif" alt=""></a>
          <a href="#"><img src="images/twitter.gif" alt=""></a>
        </div>
        <div class="seven columns" id="aboutImage">
          <img src="images/swim_lessons_collage.jpg" alt="">
        </div>
      </div>

      <div class="row">
        <div class="twelve columns">
          <h3 id="teamHeading">The Team</h3>
        </div>
      </div>

      <div class="row">
        <div class="twelve columns" id="aboutMembers">
          <table>
            <tr>
              <td>
                <img src="images/profile_pic_placeholder.jpg" alt="">
                <h5 class="overrideHColor">Joshua Abe</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut mi turpis. Nulla ac accumsan orci. Vivamus sed lectus dolor. Ut interdum imperdiet tortor in porta. Suspendisse semper interdum sagittis. Vestibulum et viverra ex.</p>
              </td>
              <td>
                <img src="images/profile_pic_placeholder.jpg" alt="">
                <h5 class="overrideHColor">Stephen Cheng</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut mi turpis. Nulla ac accumsan orci. Vivamus sed lectus dolor. Ut interdum imperdiet tortor in porta. Suspendisse semper interdum sagittis. Vestibulum et viverra ex.</p>
              </td>
              <td>
                <img src="images/profile_pic_placeholder.jpg" alt="">
                <h5 class="overrideHColor">Allen Li</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut mi turpis. Nulla ac accumsan orci. Vivamus sed lectus dolor. Ut interdum imperdiet tortor in porta. Suspendisse semper interdum sagittis. Vestibulum et viverra ex.</p>
              </td>
            </tr>
            <tr>
              <td>
                <img src="images/profile_pic_placeholder.jpg" alt="">
                <h5 class="overrideHColor">Donald Watson</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut mi turpis. Nulla ac accumsan orci. Vivamus sed lectus dolor. Ut interdum imperdiet tortor in porta. Suspendisse semper interdum sagittis. Vestibulum et viverra ex.</p>
              </td>
              <td>
                <img src="images/profile_pic_placeholder.jpg" alt="">
                <h5 class="overrideHColor">Wei Zhou</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut mi turpis. Nulla ac accumsan orci. Vivamus sed lectus dolor. Ut interdum imperdiet tortor in porta. Suspendisse semper interdum sagittis. Vestibulum et viverra ex.</p>
              </td>
              <td>
                <img src="images/profile_pic_placeholder.jpg" alt="">
                <h5 class="overrideHColor">Some Mascot</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut mi turpis. Nulla ac accumsan orci. Vivamus sed lectus dolor. Ut interdum imperdiet tortor in porta. Suspendisse semper interdum sagittis. Vestibulum et viverra ex.</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <!-- FOOTER -->

    <div id="footer" class="footer">
      <div class="container">
        <div class="row">
          <div class="six columns">
            <a class="button button-primary"  href="./about.html">About Us</a>
          </div>
          <div class="six columns">
            <a class="button button-primary" href="./sitemap.html">Sitemap</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="./js/jquery-2.2.0.js"></script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>