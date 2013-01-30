<?php

$db = new mysqli('localhost', 'root', 'root', 'filament');

if($db->connect_errno > 0){
	die('Unable to connect to database [' . $db->connect_error . ']');
}
echo "works.";
?>