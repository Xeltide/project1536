<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!--Basic Page Needs-->
	<title>Questions?</title>
	<meta charset="utf-8">

	<!-- Favicon
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="icon" type="image/png" href="./images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="./images/favicon-16x16.png" sizes="16x16" />

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/formstyle.css">
	<link rel="stylesheet" href="./css/base.css">

	<!--- FONT -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>

<?php
	include("header.php");
?>
	<!--Container div, used with skeleton to contain and format rows.-->
	<div class="container">
		<!--Row div, used with skeleton to create rows with responsive columns-->
		<div class="row">
			<!--twelve column div, with id #formheader. Main heading for the form page-->
			<div id="formheader" class="twelve columns">
				<h2>Have a Question?</h2>
			</div>
		</div>
		<!--Row div, used with skeleton to create rows with responsive columns. #formrow id adds a border and formats the form correctly-->
		<div id="formrow" class="row">
			<!--eight column div, holds actual form-->
			<div class="eight columns">
				<!--The form, with class .form-->
				<form class="form" name="Messager" method="post" action="http://webdevfoundations.net/scripts/formdemo.asp" onsubmit="return formValidate()">

					<label for="formName">Name<span>*</span></label>
					<input type="text" name="formName" id="formName" placeholder="Your Name" required/>


					<label for="formEmail">Email Address<span>*</span></label>
					<input type="email" name="formEmail" id="formEmail" placeholder="YourEmail@domain" required/>

					<label for="questionField">Your Question</label>
					<textarea name="questionField" id="questionField" placeholder="Please leave a detailed message here!" required></textarea>

					<input class="button" type="submit" value="Send Message">

					<input class="button" type="reset" value="Reset Form">

				</form>
			</div>
			<!--four column div, containing the message for users in regards to the form. id #rightsideform styles and formats the right column appropriately -->
			<div id="rightsideform" class="four columns">

				<h3><span>Leave a Message!</span></h3>

				<div>
					If you have any questions or comments that you would like to share with us, please let us know! Give a brief message detailing your concerns and we will get back to you as soon as possible.
				</div>

			</div>
		</div>
	</div>
	
	<div id="footer" class="footer">
		<div class="container">
			<div class="row">
				<div class="six columns">
					<a class="button button-primary" href="./about.html">About Us</a>
				</div>
				<div class="six columns">
					<a class="button button-primary" href="./sitemap.html">Sitemap</a>
				</div>
			</div>
		</div>
	</div>
</div>

	<!--Javascripts-->
	<script src="./js/jquery-2.2.0.js"></script>
	
</body>
</html>