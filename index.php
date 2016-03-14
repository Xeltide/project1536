<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Homepage</title>
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
  <link rel="stylesheet" href="css/homepage.css">
</head>
<body>

  <!-- Navigation Bar
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php
  include("header.php");
?>
  
<!-- Jumbotron Header
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container" id="jumbotron">
    <span id="slidePrevButton">&laquo;</span>
    <span id="slideNextButton">&raquo;</span>

    <div class="row">
      <div class="twelve columns">
        <img class="jumboImg" alt="" src="images/field.jpg">
      </div>
      <div class="twelve columns jumbotronText">
        <h3 class="overrideHColor">Swim Kids</h3>
        <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <img class="jumboImg" alt="" src="images/watersafety.jpg">
      </div>
      <div class="twelve columns jumbotronText">
        <h3 class="overrideHColor">Water Safety</h3>
        <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <img class="jumboImg" alt="" src="images/drills.jpg">
      </div>
      <div class="twelve columns jumbotronText">
        <h3 class="overrideHColor">Drills</h3>
        <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
      </div>
    </div>
  </div>

  <!-- Page Content
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="container">
    <div class="row">
      <div id="homeMenuContainer" class="twelve columns">
        <a href="swimkids.html" class="homeMenuItem">
          <h3>Swim Kids</h3>
          <p class="menuDesc">Swim Kids is designed for children 6 years old and upwards. A total of 10 levels are in the curriculum and each level consists of three categories: Fitness, Water Safety and Swimming.</p>
          <div class="button button-primary menuButton">>></div>
        </a>

        <a href="preschool.html" class="homeMenuItem">
          <h3>Pre-School</h3>
          <p class="menuDesc">Preschool program is designed for children ranging from age 6 months up to 6 years old. A total of 10 levels are in the curriculum and each level consits of three key categories: Fitness, Water Safety and Swimming Stokes.</p>
          <div class="button button-primary menuButton">>></div>
        </a>

        <a href="drills.html" class="homeMenuItem">
          <h3>Drills</h3>
          <p class="menuDesc">As students progress through the level they will be able to swim increased distances up to half a kilometer. Every level will educate students on new safety items like boating safety, CPR, ice safety and many more. Upon completion, each student will know three resting strokes and two power strokes.</p>
          <div class="button button-primary menuButton">>></div>
        </a>
        <a href="safety.html" class="homeMenuItem">
          <h3>Water Safety</h3>
          <p class="menuDesc">As students progress through the level they will be able to swim increased distances up to half a kilometer. Every level will educate students on new safety items like boating safety, CPR, ice safety and many more. Upon completion, each student will know three resting strokes and two power strokes.</p>
          <div class="button button-primary menuButton">>></div>
        </a>
      </div>
    </div>
  </div>

  <div class="container" id="homeQuestionsBlock">
    <div class="row">
      <div class="eight columns offset-by-two">
        <h3>Got Questions?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="form.html" class="button button-primary" id="homeAskButton">Ask Us!</a>
      </div>
    </div>
  </div>

  <!-- Footer
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  
  <div id="footer" class="footer">
    <div class="container">
      <div class="row">
        <div class="six columns">
          <a class="button button-primary" href="./about.html">About Us</a>
        </div>
        <div class="six columns">
          <a class="button button-primary" href="./sitemap.html">Sitemap</a>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="./js/jquery-2.2.0.js"></script>
<script src="./js/jumbotron.js"></script>

<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>