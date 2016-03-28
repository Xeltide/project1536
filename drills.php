<?php include("shared/common.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Drills</title>
	<?php head();?>
  <link rel="stylesheet" type="text/css" href="css/DrillsStyle.css">
</head>
<body>

  <!-- Navigation Bar
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php navbar();?>
<!-- Page Content -->
	<div class="container">
		<div class="panel">
			<div class="twelve coslumns">
				<div class="panelImage">
					<img src="images/drills.jpg" alt="jumbotron image">
				</div>
			</div>
		</div>
		<div class="row" id="labels">
			<div class="three columns">
				<h5>Basics</h5>
			</div>
			<div class="three columns">
				<h5>Front Crawl</h5>
			</div>
			<div class="three columns">
				<h5>Back Crawl</h5>
			</div>
			<div class="three columns">
				<h5>EleBack Stroke</h5>
			</div>
		</div>
		<div class="selection">
			<div class="drillbox">
				<img src="./images/basics.jpg">
				<div class="hidden">
					<h5>compilation of items you will need and how to get started swimming</h5>
				</div>
			</div>
			<div class="drillbox">
				<img src="./images/frontstroke.jpg">
				<div class="hidden">
					<h5>Drills for catch-up, high elbows, breathing and reach</h5>
				</div>
			</div>
			<div class="drillbox">
				<img src="./images/backstroke.jpg">
				<div class="hidden">
					<h5>Drills for shoulder rolls, catch-up, kicking and reach</h5>
				</div>
			</div>
			<div class="drillbox">
				<img src="./images/elebackstroke.jpg">
				<div class="hidden">
					<h5>Drills for scissor kick, frog kick, body position and coordination</h5>
				</div>
			</div>
		</div>
		<div class="row" id="labels2">
			<div class="three columns">
				<h5>Breast Stroke</h5>
			</div>
			<div class="three columns">
				<h5>Butterfly</h5>
			</div>
			<div class="three columns">
				<h5>Eggbeater</h5>
			</div>
			<div class="three columns">
				<h5>Fitness</h5>
			</div>
		</div>
		<div class="selection">
			<div class="drillbox">
				<img src="./images/breaststroke.jpg">
				<div class="hidden">
					<h5>Drills for arms, whip kick and coordination</h5>
				</div>
			</div>
			<div class="drillbox">
				<img src="./images/butterfly.jpg">
				<div class="hidden">
					<h5>Drills for dolphin kick, arms and coordination</h5>
				</div>
			</div>
			<div class="drillbox">
				<img src="./images/eggbeater.jpg">
				<div class="hidden">
					<h5>Drills to learn, improve and perfect your eggbeater</h5>
				</div>
			</div>
			<div class="drillbox">
				<img src="./images/fitness.jpg">
				<div class="hidden">
					<h5>Variety of sets for your daily fitness, competitive swimmer or triathlete</h5>
				</div>
			</div>
		</div>
	</div>

  <?php footer();?>
  <script type="text/javascript" src="./js/box.js"></script>

</body>
</html>
