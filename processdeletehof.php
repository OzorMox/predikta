<?php

//create session
session_start();

//connect to the database
include("connect.php");

if ($_SESSION['admin'] == 1)
{
	mysql_query("DELETE FROM halloffame WHERE entry_id = " . $_GET["entry"]);
	include("log.php");
	$action = "Deleted hall of fame entry: " . $_GET["entry"];
	writelog($action);
	header('Location: halloffame.php');
	exit();
}
else
{
	header('Location: error.php?error=Permission+denied');
	exit();
}

mysql_close($connection);

?>
