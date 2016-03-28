<?php

/****************************************
 * Checks if user is logged in.
 */
function isLoggedIn() {
	//Check whether the session variable SESS_MEMBER_ID is present or not
	//Should call session_start(); before calling this function
	return (isset($_SESSION['SESS_MEMBER_ID']) &&
	       	(trim($_SESSION['SESS_MEMBER_ID']) != ''));
}

/****************************************
 * Get relative path.
 */
function getRelativePath() {
    return strpos($_SERVER['PHP_SELF'], 'content/') ? '../' : '';
}
function relativePath() {
    echo getRelativePath();
}

/****************************************
 * Common elements.
 */
function head() {
    include("head.php");
}
function navbar() {
    include("navbar.php");
}
function footer() {
    include("footer.php");
}
function forum() {
	include("forum.php");
}

/****************************************
 * User session details.
 */
function userid() {
	echo getUserid();
}
function username() {
	echo getUsername();
}
function firstname() {
	echo getFirstname();
}
function lastname() {
	echo getLastname();
}
function getUserid() {
	return $_SESSION['SESS_MEMBER_ID'];
}
function getUsername() {
	return $_SESSION['SESS_MEMBER_LOGIN'];
}
function getFirstname() {
	return $_SESSION['SESS_FIRST_NAME'];
}
function getLastname() {
	return $_SESSION['SESS_LAST_NAME'];
}

?>
