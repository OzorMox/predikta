<html>

<head>
<title>Predikta</title>
<link rel="stylesheet" type="text/css" href="style.css">

<script type="text/javascript" src="calendarDateInput.js">

/***********************************************
* Jason's Date Input Calendar- By Jason Moon http://calendar.moonscript.com/dateinput.cfm
* Script featured on and available at http://www.dynamicdrive.com
* Keep this notice intact for use.
***********************************************/

</script>
</head>

<body>
<center>
<?php

include("title");

if ($_GET["game1"] == "")
	$game1 = "Unknown";
else
	$game1 = $_GET["game1"];

if ($_GET["game2"] == "")
	$game2 = "Unknown";
else
	$game2 = $_GET["game2"];

echo "<form name=\"date\" action=\"processdate.php?game=" . $_GET["game"] . "\" method=\"post\">";
echo "Change the date for " . $game1 . " v " . $game2;
echo "<br>";
echo "<br>";
echo "<script>DateInput('date', true, 'YYYY-MM-DD')</script>";
echo "<br>";
echo "<br>";
echo "Change the game type";
echo "<br>";
echo "<br>";
echo "<table style=\"border-style:none;\">";
echo "<tr>";
echo "<td style=\"border-style:none;\"><input type=\"radio\" name=\"type\" value=\"weekend\" checked=\"checked\"></td><td style=\"border-style:none;\">Weekend (12pm lock)</td>";
echo "</tr>";
echo "<tr>";
echo "<td style=\"border-style:none;\"><input type=\"radio\" name=\"type\" value=\"weekday\"></td><td style=\"border-style:none;\">Weekday (7pm lock)</td>";
echo "</tr>";
echo "</table>";
echo "<br>";
echo "<input type=\"submit\" value=\"OK\">";
echo "</form>";
echo "<a href=\"index.php\">Back</a>";

?>

</center>
</body>

</html>