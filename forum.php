<?php
	require_once('config.php');

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect");
	mysql_select_db(DB_DATABASE)or die("cannot select DB");
	$tbl_name="topic"; // Table name


	$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
	// ORDER BY id DESC is order result by descending
	$result=mysql_query($sql);
?>

<table id="forumTable" width="100%" border="0" cellpadding="3" cellspacing="1">
<tr>
<td width="6%" bgcolor="#1E90FF" class="centerData"><strong>#</strong></td>
<td width="53%" bgcolor="#1E90FF"><strong>Topic</strong></td>
<td width="13%" bgcolor="#1E90FF"><strong>Date/Time</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){ // Start looping table row
?>

<tr>
<td bgcolor="#FFFFFF" class="centerData"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection
}
mysql_close();
?>
<tr>
<td colspan="5" align="right" bgcolor="#1E90FF" class="centerData"><a href="add_topic_form.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
