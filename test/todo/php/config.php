<?php
error_reporting(0);
$connection = mysql_connect('192.168.0.104','root','admin#1') or die(mysql_error());
$sel_db = mysql_select_db('dummy') or die(mysql_error());

?>
