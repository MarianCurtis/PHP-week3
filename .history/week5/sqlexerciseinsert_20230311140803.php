
//Variable containing SQL command
        $sql = "CREATE TABLE mc_sp23_Contacts (
            contactID INT (6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR (100) NULL,
            email VARCHAR (100) NULL,
            contactBack VARCHAR(3) NULL,
            comments VARCHAR(600) NULL,
            dateSent DATETIME DEFAULT CURRENT_TIMESTAMP
            );";