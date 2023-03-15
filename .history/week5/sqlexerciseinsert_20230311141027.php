<?php
//Variable containing SQL command
$sql = "INSERT INTO mc_sp23_Contacts (
    name VARCHAR (100) NULL,
    email VARCHAR (100) NULL,
    contactBack VARCHAR(3) NULL,
    comments VARCHAR(600) NULL,
    dateSent DATETIME DEFAULT CURRENT_TIMESTAMP
    );";
?>