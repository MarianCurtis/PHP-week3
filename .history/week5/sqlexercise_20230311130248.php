<?php
    $hostname = "php-mysql-exercisedb.slccwebdev.com";
    $username = "phpmysqlexercise";
    $password = "mysqlexercise";
    $databasename = "php_mysql_exercisedb";

    try {
     //Create NEW PDO object
     $conn = new PDO("DBMS:host=$hostname;dbname=$databasename",$username, $password);

     //Set PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     //Send sucess message to screen
     echo 
    } catch (PDOException $error) {
        //Return error code if one is created
        echo "Connection Failed: " . $error->getMessage();
    }
    
?>