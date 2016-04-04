<?php include("../shared/common.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Swimkids</title>
	<?php head();?>
	<link rel="stylesheet" href="../css/contentStyle.css">
</head>
<body>

<!-- Navigation Bar
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php navbar();?>


<!-- Main Content
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="twelve columns">
      <img src="../images/swimkids2.png" alt="swimkids 2">
    </div>
  </div>

  <div class="container">
    <div class="three columns">
      <h4>Fitness</h4>
    </div>
    <div class="five columns">
      <h4>Skills and Water Safety</h4>
    </div>
    <div class="four columns">
      <h4>Swimming</h4>
    </div>
  </div>

  <div class="container">
    <div class="three columns">
      <ul id="fitness">
        <li>Flutter Kick 10m (Assisted)</li>
        <li>Distance Swim 10m</li>
      </ul>
    </div>
  	<div class="five columns">
  		<ul id="safety">
        <li>Facility/Site Rules</li>
        <li>EMS/9-1-1</li>
        <li>Introduction to PFDs/Lifejackets</li>
        <li>Weight Transfer, Shallow Water</li>
        <li>Deep Water Activities (Assisted)</li>
      </ul>
  	</div>
  	<div class="four columns">
  		<ul id="swim">
  			<li>Rhythmic Breathing 10 Times (2 Ways)</li>
  			<li>Front Float and Recovery 3 sec</li>			
  			<li>Front Glide with Flutter Kick 10m</li>
  			<li>Back Glide with Flutter kick 5m</li>
  			<li>Side Glide with Flutter Kick 5m (Assisted)</li>
  			<li>Roll-Over Glide with Flutter Kick 5m</li>
  			<li>Front Swim 5m</li>
  		</ul>
  	</div>
  </div>

  <div class="container">
  	<a class="button" href="contentSK1.php">Swim Kids 1</a>
  	<a class="button u-pull-right" href="contentSK3.php">Swim Kids 3</a>
  </div>

<?php footer();?>

</body>
</html>