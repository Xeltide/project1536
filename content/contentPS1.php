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
  	<h1>Starfish</h1>
  </div>

  <div class="container">
  	<div class="four columns">
  		<h4>Fitness Activities</h4>
  	</div>
  	<div class="eight columns">
  		<ul id="fitness">
  			<li>Play and Songs</li>
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
  			<li>Shallow Water Entries and Exits (Caregiver and Child)</li>
  			<li>Show How to Stay Warm</li>
  			<li>When and How to Get Help</li>
  			<li>Choking Prevention</li>
  			<li>Choosing a PFD</li>
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
  			<li>Supports and Hold Techniques for the Caregiver</li>
  			<li>Submersion (Optional Participation)</li>
  			<li>Buoyancy and Movement (Assisted)</li>
  			<li>Front Position (Assisted)</li>
  			<li>Back Position (Assisted)</li>
  			<li>Vertical Position (Assisted)</li>
  		</ul>
  	</div>
  </div>

  <div class="container">
  	<a class="button u-pull-right" href="contentPS2.php">level 2</a>
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