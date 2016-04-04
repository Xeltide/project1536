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
          <div class="itemIcon"><img src="images/icon_preschool.png" alt="Preschool"></div>
          <p class="menuDesc">Make time to bond with your child and help them build confidence in the water before kindergarten.</p>
          <div class="button button-primary menuButton">Read more &raquo;</div>
        </a>

        <a href="swimkids.php" class="homeMenuItem">
          <h3>Swim Kids</h3>
          <div class="itemIcon"><img src="images/icon_sk.png" alt="Swim Kids"></div>
          <p class="menuDesc">Allows your kids to practice simple swimming techniques and learn to work with their peers.</p>
          <div class="button button-primary menuButton">Read more &raquo;</div>
        </a>

        <a href="./content/contentSK2.php" class="homeMenuItem">
          <h3>Criteria</h3>
          <div class="itemIcon"><img src="images/icon_criteria.png" alt="Criteria"></div>
          <p class="menuDesc">Check out the exact criteria and requirements for Swim Kids 2.</p>
          <div class="button button-primary menuButton">Read more &raquo;</div>
        </a>
        <a href="drills.php" class="homeMenuItem">
          <h3>Drills</h3>
          <div class="itemIcon"><img src="images/icon_drills.png" alt="Drills"></div>
          <p class="menuDesc">Practice and explore different drills to improve your skills and overall long-term health.</p>
          <div class="button button-primary menuButton">Read more &raquo;</div>
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