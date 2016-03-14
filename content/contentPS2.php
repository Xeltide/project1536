<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Preschool</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT –––––––––––––––––––––––––––––––––––––––– -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/skeleton.css">
  <link rel="stylesheet" href="../css/base.css">
  <link rel="stylesheet" href="../css/contentStyle.css">
</head>
<body>

  <!-- Navigation Bar
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php
  include("header.php");
?>
  <!-- Main Content
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container" id="level">
  	<h1>Duck</h1>
  </div>

  <div class="container">
  	<div class="four columns">
  		<h4>Fitness Activities</h4>
  	</div>
  	<div class="eight columns">
  		<ul id="fitness">
  			<li>Play and Songs</li>
  			<li>Uses Buoyant Object for Support (Assisted)</li>
  		</ul>
  	</div>
  </div>

  <div class="container">
  	<div class="four columns">
  		<h4>Skill and Water Safety</h4>
  	</div>
  	<div class="eight columns">
  		<ul id="safety">
  			<li>Facility/Site Orientation and Active Supervision</li>
  			<li>Stop! Look! Ask!</li>
  			<li>Shallow Water Entries and Exits (Caregiver and Child)</li>
  			<li>PFD/Lifejacket and Me (Assisted)</li>
  			<li>Show How to Stay Warm</li>
  			<li>Buoyant Objects</li>
  			<li>Change Directions</li>
  			<li>When and How to Get Help</li>
  			<li>Choking Prevention</li>
  			<li>Choking Response</li>
  		</ul>
  	</div>
  </div>

  <div class="container">
  	<div class="four columns">
  		<h4>Swimming</h4>
  	</div>
  	<div class="eight columns">
  		<ul id="swim">
  			<li>Getting Wet (Assisted)</li>
  			<li>Submersion (Optional Participation)</li>
  			<li>Introduction to Rhythmic Breathing: Breath Control</li>
  			<li>Buoyancy and Movement (Assisted)</li>
  			<li>Move Forward (Assisted)</li>
  			<li>Back Backward (Assisted)</li>
  			<li>Front Float and Recovery (Assisted)</li>
  			<li>Back Float and Recovery (Assisted)</li>
  		</ul>
  	</div>
  </div>

  <div class="container" id="pad">
  	<a class="button" href="contentPS1.php">level 1</a>
  	<a class="button u-pull-right" href="contentPS3.php">level 3</a>
  </div>
</div>

  <div id="footer" class="footer">
    <div class="container">
        <div class="six columns">
            <a class="button button-primary" href="../about.html">About Us</a>
        </div>
        <div class="six columns">
            <a class="button button-primary" href="../sitemap.html">Sitemap</a>
            <!-- Buttons are placed from right to left so they float properly -->
        </div>
    </div>
  </div>

  <!--Javascripts-->
  <script src="../js/jquery-2.2.0.js"></script>

</body>
</html>