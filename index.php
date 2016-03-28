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
        <img class="jumboImg" alt="" src="images/home.jpg">
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <img class="jumboImg" alt="" src="images/preschool.jpg">
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <img class="jumboImg" alt="" src="images/swimkids.jpg">
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <img class="jumboImg" alt="" src="images/drills.jpg">
      </div>
    </div>
  </div>

  <!-- Page Content
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="container">
    <div class="row">
      <div id="homeMenuContainer" class="twelve columns">
        <a href="preschool.php" class="homeMenuItem">
          <h3>Preschool</h3>
          <p class="menuDesc">Toddlers will build confidence in the water with the assistance of their parents.</p>
          <div class="button button-primary menuButton">>></div>
        </a>

        <a href="swimkids.php" class="homeMenuItem">
          <h3>Swim Kids</h3>
          <p class="menuDesc">Many instructors take their students on a tour around the pool area to point out dangers and meeting areas.</p>
          <div class="button button-primary menuButton">>></div>
        </a>

        <a href="adults.php" class="homeMenuItem">
          <h3>Adults</h3>
          <p class="menuDesc">Upon completion, each student will know three resting strokes and two power strokes.</p>
          <div class="button button-primary menuButton">>></div>
        </a>
        <a href="drills.php" class="homeMenuItem">
          <h3>Drills</h3>
          <p class="menuDesc">Students will be able to learn different crawl and strokes as well as general water treading exercises.</p>
          <div class="button button-primary menuButton">>></div>
        </a>
      </div>
    </div>
  </div>

  <div class="container" id="homeQuestionsBlock">
    <div class="row">
      <div class="eight columns offset-by-two">
        <h3>Got Questions?</h3>
        <p>If you have any questions or comments that you would like to share with us, please let us know! Give a brief message detailing your concerns and we will get back to you as soon as possible.</p>
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