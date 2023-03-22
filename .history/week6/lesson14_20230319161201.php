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
        $sql = "SELECT * FROM mc_sp23_Contacts;";

        //Prepare SQL statement on server
        $stmt = $conn->prepare($sql);

        //Execute SQL statement on server
        $return = $conn->query($sql);

        //Print returned data to the screen
        echo "<b>The data currently in the database: </b><br>\n";
        foreach ($conn->query($sql) as $row) {
            echo $row['contactID'] . " | ";
            echo $row['name'] . " | ";
            echo $row['email'] . " | ";
            echo $row['contactBack'] . " | ";
            echo $row['comments'] . " | ";
            echo $row['dateSent'] . "<br>\n";}


    } catch (PDOException $error) {

        //Return error code if one is created
        echo "Execution error: <br>" . $sql . "<br>" . $error->getMessage();
    }

    $conn = null;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <!-- Adding Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <title>Data Table</title>
   </head>
   <body>
    <!-- Table Section-->
    <section id="table">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2>The data currently in the database is:</h2>

            <!--Table-->
            <table class="table" od="dataTable">
              <thread>
                <try>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Contact Back</th>
                  <th scope="col">Comments</th>
                  <th scope="col">Date Sent</th>
                </try>
              </thread>

            </table>
          </div>
        </div>
      </div>
    </section>
   </body>
</html>