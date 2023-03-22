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

        $stmt->execute();
        //Execute SQL statement on server
        $return = $conn->query($sql);

       


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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

    <!-- JavaScript Bundle with Popper -->
    <<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <!--DataTable JavaScript Libraries-->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

    <!-- Enable DataTable Pagination-->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        } );
    </script>

    <title>Data Table</title>
   </head>
   <body>
    <!-- Table Section-->
    <section id="table">
      <div class="container my-5">
        <div class="row">
          <div class="col">
            <h2>The data currently in the database is:</h2>

            <!--Table-->
            <table class="table" od="dataTable">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Contact Back</th>
                  <th scope="col">Comments</th>
                  <th scope="col">Date Sent</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 //Print returned data to the screen
                  echo "<b>The data currently in the database: </b><br>\n";
                  foreach ($stmt->fetchAll() as $row) {
                  echo "<tr>";
                  echo "<td>" . $row['contactID'] . "</td>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['contactBack'] . "</td>";
                  echo "<td>" . $row['comments'] . "</td>";
                  echo "<td>" . $row['dateSent'] . "</td>";
                  echo "<tr>";
                }
                ?>
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </section>
   </body>
</html>