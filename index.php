<?php include("shared/common.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <?php head();?>
  <link rel="stylesheet" href="css/homepage.css">
</head>
<body>

  <!-- Navigation Bar
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php navbar();?>
  
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
        <a href="swimkids.php" class="homeMenuItem">
          <h3>Swim Kids</h3>
          <p class="menuDesc">Swim Kids is designed for children 6 years old and upwards. A total of 10 levels are in the curriculum and each level consists of three categories: Fitness, Water Safety and Swimming.</p>
          <div class="button button-primary menuButton">>></div>
        </a>

        <a href="preschool.php" class="homeMenuItem">
          <h3>Pre-School</h3>
          <p class="menuDesc">Preschool program is designed for children ranging from age 6 months up to 6 years old. A total of 10 levels are in the curriculum and each level consits of three key categories: Fitness, Water Safety and Swimming Stokes.</p>
          <div class="button button-primary menuButton">>></div>
        </a>

        <a href="drills.php" class="homeMenuItem">
          <h3>Drills</h3>
          <p class="menuDesc">As students progress through the level they will be able to swim increased distances up to half a kilometer. Every level will educate students on new safety items like boating safety, CPR, ice safety and many more. Upon completion, each student will know three resting strokes and two power strokes.</p>
          <div class="button button-primary menuButton">>></div>
        </a>
        <a href="safety.php" class="homeMenuItem">
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
        <a href="form.php" class="button button-primary" id="homeAskButton">Ask Us!</a>
      </div>
    </div>
  </div>

<?php footer();?>
<script src="js/jumbotron.js"></script>

<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>