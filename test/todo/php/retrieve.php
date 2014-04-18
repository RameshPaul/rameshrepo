<?php
require "config.php";
$query = "SELECT `task_text` FROM `tbltasks` WHERE `status` = "."'Pending'"."";

$result = mysql_query($query) or die(mysql_error());
$taskArray = array();
while($row = mysql_fetch_array($result))
{
	$taskArray[] = $row[0];
}
//$comma_separated = implode(",", $taskArray);
echo json_encode($taskArray);
?>