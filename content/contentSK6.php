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
  	<h1>Swim Kids 6</h1>
  </div>

  <div class="container">
  	<div class="four columns">
  		<h4>Fitness Activities</h4>
  	</div>
  	<div class="eight columns">
  		<ul id="fitness">
  			<li>Dolphin Kick 10m</li>
  			<li>Distance Swim 75m</li>
  		</ul>
  	</div>
  </div>

  <div class="container">
  	<div class="four columns">
  		<h4>Skill and Water Safety</h4>
  	</div>
  	<div class="eight columns">
  		<ul id="safety">
  			<li>Causes of Boating Incidents</li>
  			<li>When and Where to Go on Ice</li>
  			<li>Distressed Swimmer Recognition and Simulation</li>
  			<li>Throwing Assist without a Line</li>
  			<li>Head-First Sculling on Back 10m</li>
  			<li>Tread Water, Deep Water 1.5 min</li>
  			<li>Front Dive</li>
  		</ul>
  	</div>
  </div>

  <div class="container">
  	<div class="four columns">
  		<h4>Swimming</h4>
  	</div>
  	<div class="eight columns">
  		<ul id="swim">
  			<li>Front Crawl 25m</li>	
  			<li>Back Crawl 25m</li>
  			<li>Elementary Back Stroke 15m</li>
  		</ul>
  	</div>
  </div>

  <div class="container">
  	<a class="button" href="contentSK5.php">level 5</a>
  	<a class="button u-pull-right" href="contentSK7.php">level 7</a>
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