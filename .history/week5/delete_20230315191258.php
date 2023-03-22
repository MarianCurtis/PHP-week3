<?php
$hostname = "ordway.iad1-mysql-e2-18a.dreamhost.com";
$username = "kb_student";
$password = "@Tacos4Life@";
$databasename = "kb_class";

try {
  //Create new PDO Object with connection parameters
  $conn = new PDO("mysql:host=$hostname;dbname=$databasename", $username, $password);

  //Set PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //Variable containing SQL command
  $sql = "DELETE FROM mcurtis_table;";

  //Execute SQL statement on server
  $conn->exec($sql);

  echo "Table Data Deleted.";
} catch (PDOException $error) {

  //Return error code if one is created
  echo "Execution error: <br>" . $sql . "<br>" . $error->getMessage();
}

$conn = null;