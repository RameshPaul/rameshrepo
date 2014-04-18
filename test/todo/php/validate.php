<?php
require "config.php";
$Task = $_POST['task'];
$query = "SELECT `task_text` FROM `tbltasks` WHERE `status` = "."'Pending'"."";

$result = mysql_query($query) or die(mysql_error());
$taskArray = array();
while($row = mysql_fetch_array($result))
{
	if($Task==$row[0])
	{
		echo "true";
	}
}
?>