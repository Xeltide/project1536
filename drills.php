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
			<div class="four columns">
				<h5>Basics</h5>
			</div>
			<div class="four columns">
				<h5>Front Crawl</h5>
			</div>
			<div class="four columns">
				<h5>Back Crawl</h5>
			</div>
		</div>
		<div class="selection">
			<div class="drillbox">
				<img src="./images/basics.jpg" alt="basics information">
				<div class="hidden">
					<h5>You'll find a list of items you might need to get started swimming. You will also find some basic drills to get you started on the right path.</h5>
					<div class="button">Basics</div>
				</div>
			</div>
			<div class="drillbox">
				<img src="./images/frontstroke.jpg" alt="front crawl drills">
				<div class="hidden">
					<h5>A complilation of the best drills for front crawl correction and improve.</h5>
					<div class="button">Front Crawl</div>
				</div>
			</div>
			<div class="drillbox">
				<img src="./images/backstroke.jpg" alt="back crawl drills">
				<div class="hidden">
					<h5>Here you will find drills for kicking, arms and coordination related to back crawl.</h5>
					<div class="button">Back Crawl</div>
				</div>
			</div>
		</div>
		<div class="row" id="labels2">
			<div class="four columns">
				<h5>Breast Stroke</h5>
			</div>
			<div class="four columns">
				<h5>Butterfly</h5>
			</div>
			<div class="four columns">
				<h5>Fitness</h5>
			</div>
		</div>
		<div class="selection">
			<div class="drillbox">
				<img src="./images/breaststroke.jpg" alt="breaststroke drills">
				<div class="hidden">
					<h5>Drills for arms, whip kick and coordination</h5>
					<div class="button">Breaststroke</div>
				</div>
			</div>
			<div class="drillbox">
				<img src="./images/butterfly.jpg" alt="butterfly drills">
				<div class="hidden">
					<h5>Drills for dolphin kick, arms and coordination</h5>
					<div class="button">Butterfly</div>
				</div>
			</div>
			<div class="drillbox">
				<img src="./images/fitness.jpg" alt="eggbeater drills">
				<div class="hidden">
					<h5>Variety of drills and exercises for casual swimmers to triatheletes.</h5>
					<div class="button">Fitness</div>
				</div>
			</div>
		</div>
	</div>

  <?php footer();?>
  <script type="text/javascript" src="./js/box.js"></script>

</body>
</html>
