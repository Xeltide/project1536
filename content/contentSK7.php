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
  	<h1>Swim Kids 7</h1>
  </div>

  <div class="container">
  	<div class="four columns">
  		<h4>Fitness Activities</h4>
  	</div>
  	<div class="eight columns">
  		<ul id="fitness">
  			<li>Dolphin Kick 15m</li>
  			<li>Distance Swim 150m</li>
  		</ul>
  	</div>
  </div>

  <div class="container">
  	<div class="four columns">
  		<h4>Skill and Water Safety</h4>
  	</div>
  	<div class="eight columns">
  		<ul id="safety">
  			<li>Mild and Severe Airway Obstruction</li>
  			<li>Choking Rescue Mild and Sever Airway Obstruction, Conscious Person</li>
  			<li>Throwing Assist with a Line</li>
  			<li>Reaching Assist with Rescue Equipment</li>
  			<li>Stride Entry</li>
  		</ul>
  	</div>
  </div>

  <div class="container">
  	<div class="four columns">
  		<h4>Swimming</h4>
  	</div>
  	<div class="eight columns">
  		<ul id="swim">
  			<li>Front Crawl 50m</li>	
  			<li>Back Crawl 50m</li>
  			<li>Elementary Back Stroke 25m</li>
  			<li>Front Scull 15m</li>
  			<li>Whip Kick on Front 15m</li>
  		</ul>
  	</div>
  </div>

  <div class="container">
  	<a class="button" href="contentSK6.php">level 6</a>
  	<a class="button u-pull-right" href="contentSK8.php">level 8</a>
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