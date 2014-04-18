<?php
require "config.php";

$Task = $_POST['task'];
$Status = $_POST['status'];

	if(!empty($Task) && $Status==="Pending" )
	{
		$query = "INSERT INTO `tbltasks`(`task_id`, `task_text`, `status`) VALUES (default, '$Task', '$Status')";
		$result = mysql_query($query) or die(mysql_error());
		echo $Task;
	}

	if(!empty($Task) && $Status==="Done" )
	{
		$query = "UPDATE `tbltasks` SET `status`='$Status' WHERE `task_text`='$Task'";
		$result = mysql_query($query) or die(mysql_error());
		echo $Task;
	}	


?>
