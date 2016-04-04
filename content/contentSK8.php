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
      <img src="../images/swimkids8.png" alt="swimkids 8">
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
        <li>Eggbeater/Tread Water 3min</li>
        <li>Distance Swim 300m</li>
      </ul>
    </div>
  	<div class="five columns">
  		<ul id="safety">
        <li>Hypothermia</li>
        <li>Dangers of Open Water</li>
        <li>Rescue Breathing, Adult and Child</li>
        <li>Feet-First Surface Dive</li>
        <li>Standing Shallow Dive</li>
      </ul>
  	</div>
  	<div class="four columns">
  		<ul id="swim">
  			<li>Front Crawl 75m</li>	
  			<li>Back Crawl 75m</li>
  			<li>Elementary Back Stroke 25m</li>
  			<li>Breast Stroke 15m</li>
  		</ul>
  	</div>
  </div>

  <div class="container">
  	<a class="button" href="contentSK7.php">Swim Kids 7</a>
  	<a class="button u-pull-right" href="contentSK9.php">Swim Kids 9</a>
  </div>

<?php footer();?>

</body>
</html>