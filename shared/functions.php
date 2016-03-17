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

?>
