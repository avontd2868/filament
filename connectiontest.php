<?php
  require 'scripts/config.php';

  $db = new mysqli(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);

  if ($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
  }

    echo "<p>Connected to MySQL, using database " . DATABASE_NAME . "</p>";

$sql = <<<SQL
    SELECT *
    FROM `users`
    WHERE `likes_bacon` = 1
SQL;



  if (!$result = $db->query($sql)){
      die('There was an error running the query [' . $db->error . ']');
    }

   while($row = $result->fetch_assoc()){
       echo $row['name'] . '<br />';
    }

*/
  // SQL query-running goodness proceeds...

  $db->close();
?>