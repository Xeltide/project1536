<?php include("shared/common.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Questions?</title>
	<?php head();?>
	<link rel="stylesheet" type="text/css" href="css/formstyle.css">
</head>
<body>

<?php navbar();?>
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
				<form class="form" name="Messager" method="post" action="email.php" onsubmit="return formValidate()">

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
		<div class="row">
			<div id="forum" class="twelve columns">
				<?php
				echo '<h2>Join the Conversation!</h2>';
				if (isLoggedIn()) {
					forum();
				} else { 
					echo '<div class="row">';
					echo '<div class="twelve columns">';
					echo '<h2 class="error">Please log in to use forum</h2>';
					echo '</div>';
					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>
<?php footer();?>
</body>
</html>