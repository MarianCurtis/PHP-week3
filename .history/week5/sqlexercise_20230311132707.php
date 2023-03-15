<?php
    $hostname = "php-mysql-exercisedb.slccwebdev.com";
    $username = "phpmysqlexercise";
    $password = "mysqlexercise";
    $databasename = "php_mysql_exercisedb";

    try {
        //Create new PDO Object with connection parameters
        $conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);
        
        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        //Variable containing SQL command
        $sql = "CREATE TABLE mc_sp23_Contacts (
            contactID INT (6),
            name VARCHAR (100),
            email VARCHAR (100),
            contactBack VARCHAR(3),
            comments VARCHAR(600),
            dateSe";


        //Send success message to screen
        echo "Database Connection Successful!";


    } catch (PDOException $error) {

        //Return error code if one is created
        echo "Connection Failed: " . $error->getMessage();
    }

    $conn = null;
?>
