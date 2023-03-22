<?php
    $hostname = "php-mysql-exercisedb.slccwebdev.com";
    $username = "phpmysqlexercise";
    $password = "mysqlexercise";
    $databasename = "php_mysql_exercisedb";

    //Variables for Development
    $name = "John Doe";
    $email = "jd@emil.com";
    $contactback = "Yes";
    $comments = "Please contact me back at your earliest convenience.";

    try {
        //Create new PDO Object with connection parameters
        $conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);
        
        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        //Variable containing SQL command
        $sql = "INSERT INTO mc_sp23_Contacts (name, email, contactBack, comments)
            VALUES (:name, :email, :contactback, :comments);";
            
        //Create prepared statement
        $stmt = $conn->prepare($sql);

        //Bind parameter to variables
        $stmt->

        //Get the id of the last row added
        $last_id = $conn->lastInsertId();

        //Send success message to screen
        echo "A new record has been added successfully! The last inserted ID is: " . $last_id;


    } catch (PDOException $error) {

        //Return error code if one is created
        echo "An error occurred: <br>" . $sql . "<br>" .  $error->getMessage();
    }
    $conn = null;
?>