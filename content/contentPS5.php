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
  	<h1>Salamander</h1>
  </div>

  <div class="container">
  	<div class="four columns">
  		<h4>Fitness Activities</h4>
  	</div>
  	<div class="eight columns">
  		<ul id="fitness">
  			<li>Play and Songs</li>
  			<li>Kick on Front with Buoyant Object 2m</li>
  			<li>Distance Swim 2m</li>
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
  			<li>Stop! Look! Ask! (Find the Adult)</li>
  			<li>Weight Transfer in Shallow Water</li>
  			<li>Jump into Chest-Deep Water</li>
  			<li>PFD/Lifejacket and Me (Assisted) and HELP</li>
  			<li>Buoyant Objects</li>
  			<li>Surface Support 5 sec (Assisted)</li>
  		</ul>
  	</div>
  </div>

  <div class="container">
  	<div class="four columns">
  		<h4>Swimming</h4>
  	</div>
  	<div class="eight columns">
  		<ul id="swim">
  			<li>Open Eyes Underwater (Attempted)</li>
  			<li>Rhythmic Breathing 5 Times</li>
  			<li>Front Float and Recovery</li>
  			<li>Back Float and Recovery</li>
  			<li>Front Glide with Kick 2m</li>
  			<li>Back Glide with Kick 2m</li>
  			<li>Roll-Over Glide, Front to Back, 2m</li>
  			<li>Roll-Over Glide, Back to Front, 2m</li>
  			<li>Front Swim 2m</li>
  		</ul>
  	</div>
  </div>

  <div class="container">
  	<a class="button" href="contentPS4.php">level 4</a>
  	<a class="button u-pull-right" href="contentPS6.php">level 6</a>
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