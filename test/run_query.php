<?php

$mysqli = new mysqli("localhost", "root", "root", "filament");

$query_text = $_REQUEST['query'];
$result = $mysqli->query($query_text);

$return_rows = false;
$location = strpos($query_text, "CREATE");

if (!$result) {
	die("<p>Error in executing the SQL query " . $query_text . ": " . mysql_error() . "</p>");
}

echo "<p>Results from your query:</p>";
echo "test";
echo "<ul>";
while ($row = $result->fetchrow()) {
	echo "<li>{$row[0]}</li>";
}
echo "</ul>";

echo $query_text;

$result->close();

$mysqli->close();


?>