<?php
//Create Session
if (!isset($_SESSION)) {
    session_start();
}
//Create variables to hold form data and errors
    $name = $email = $contBack = $comments = "";
    $nameErr = $emailErr = $contBackErr = "";
    $formErr = false;

//Validate form when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["name"]))) {
        $nameErr = "Name is required.";
        $formErr = true;
    } else {
        $name = cleanInput($_POST["name"]);

//Use REGEX to only accept letters and spaces
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and standard spaces allowed.";
            $formErr = true;
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
        $formErr = true;
    } else {
        $email = cleanInput($_POST["email"]);

//check if email address is formatted correctly
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Please enter a valid email address.";
        $formErr = true;
    }
    }
    if (empty($_POST["contact-back"])) {
        $contBackErr = "Please let us know if we can contact you back.";
        $formErr = true;
    } else {
        $contBack = cleanInput($_POST["contact-back"]);
    }

    $comments = cleanInput($_POST["comments"]);
    }
    function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

//if no form errors occur, send the data to the database
    if (($_SERVER["REQUEST_METHOD"] == "POST") && (!($formErr))) { 

    //Create Connection Variables
    $hostname = "mysql.kberrio.slccwebdev.com";
    $username = "kb_student";
    $password = "@Tacos4Life@";
    $databasename = "kb_class";

    try {
    //Create new PDO Object with connection parameters
        $conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);

    //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Variable containing SQL command with placeholders
        $sql = "INSERT INTO mcurtis_table (name, email, contactBack, comments)
        VALUES (:name, :email, :contactBack, :comments);";

    //Create prepared statement
        $stmt = $conn->prepare($sql);

    //Bind parameter to variables
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':contactBack', $contBack, PDO::PARAM_STR);
        $stmt->bindParam(':comments', $comments, PDO::PARAM_STR);

    //Execute SQL statement on server
        $stmt->execute();

    //Create thank you message to display
        $_SESSION['message'] = '<p class="font-weight-bold">Thank you for your submission!</p><p class="font-weight-light">Your request has been sent.</p>';

        $_SESSION['complete'] = true;

    //Redirect
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;

    } catch (PDOException $error) {

    //Create error message to display
        $_SESSION['message'] = '<p>We apologize, the form was not submitted successfully.  Please try again later.</p>';

//Uncommon code below to troubleshoot issues
          //echo'<script>console.log("DB Error:' . addslashes($error->getmessage()).")</script>

        $_SESSION['complete'] = true;

    //Redirect
        header('Location: ' . $_SERVER ['REQUEST_URI']);
        return;
    }

    $conn = null;
    }

//My Skills List
    //$mySkills = array ('Auditing', 'Process Improvement',);
    //function newList($array) {
      //echo '<ul class="d-inline-block font-weight-light text-left">';
      //foreach ($array as $value) {
        //echo '<li>' . $value . '</li>';
      //}
      //echo '</ul>';
    //}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style3.css">

    <!-- Adding JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Adding Popperjs -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Adding Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Adding Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script> -->


</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-danger shadow sticky-top">
        <a href="#" class="navbar-brand p-3"> <img src="MyLogo.png" /> </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navContent">
        <ul class="navbar-nav">
            <li class="navbar-item"><a href="#about" class="nav-link">About</a></li>
            <li class="navbar-item"><a href="#portfolio" class="nav-link">Portfolio</a></li>
            <li class="navbar-item"><a href="#contact" class="nav-link">Contact Me</a></li>
        </ul>
    </div>
    </nav>
    <div>

    </div>

    <!-- Header -->
    <header class="mainHeader">
        <div class="container-fluid h-100">
            <div class="row align-items-center justify-content-center text-center text-black h-100">
                <div class="col-lg-8">
                    <h1 class="display-1 font-weight-bold p-5">
                        <span class="font-weight-light">Marian Curtis</span>
                    </h1>
                    <hr>
                    <p class="font-weight-bold text-dark mx-9">
                        Welcome to my Portfolio Website! I'm glad you're here, and I hope you enjoy your stay!
                    </p>
                    <a href="#about" class="btn btn-danger mt-3" role="button">Learn more about me!</a>
                </div>
            </div>
        </div>
    </header>

    <!-- About Me -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center py-5">
                <div class="col-6 col-md-4">
                <img src="PortfolioPic.jpg" alt="Marian Curtis" width="350" height="400">>
            </div>
            <div class="col-md-8 my-3">
                <h1 class="font-weight-bold">Marian Curtis</h1>
                <hr class="my-4">

    <?phP
    $mySkills = array ('Process Improvement', 'Web Development', 'Auditing', 'Team Building', 'Kayaking', 'Glass Work', 'Traveling');
    function newList($array) {
        echo '<ul >';
        foreach ($array as $s) {
            echo '<ul>' . $s . '</ul>';
        }
        echo '</ul>';
    }
        echo '<h3>My Skills and Interests Include: </h3>';
        newList($mySkills);
        ?>
                <!--<p class="font-weight-light mx-5">Sometimes, you just need to allow your inner child out and enjoy life!</p>-->
                <a href="#contact" class="btn btn-danger btn-large mt-3">Contact me</a>
            </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="bg-danger">
        <div class="container-fluid py-5">
            <div class="row text-white text-center">
                <div class="col">
                <h2 class="display-4 font-weight-bold">Portfolio</h2>
                <hr class="bg-white mb-5">
                </div>
            </div>
        </div>
    <!-- Item Row Starts -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        <!-- Item Starts -->
        <div class="col mb-4">
            <!-- Card Start -->
            <div class="card bg-light text-center border-light shadow h-100">
    <!-- Card Image -->
            <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
            alt="pm_1" class="card-img-top" style="object-fit: cover; height:15em;">
    <!-- Card Body Starts -->
        <div class="card-body">
            <h3 class="card-title">Process Improvement</h3>
            <hr class="bg-primary">
            <p class="card-text">I have managed several multi-departmental teams to analyze manufacturing processes using the DMAIC Method to help minimize waste, reduce inventory and increase productivity. I have also lead teams using the TQM (Total Quality Management) method to improve customer satisfaction by getting the entire organization on continuous process improvement.</p>
    <!-- Card Footer Starts -->
            <footer class="card-footer">
                <a href="#about" class="btn btn-outline-danger btn-lg mt-2">Learn more</a>
            </footer>
        </div>
    <!-- Card Ends -->
        </div>
        </div>
        <!-- Item Ends -->
        <!-- Item Starts -->
        <div class="col mb-4">
    <!-- Card Start -->
        <div class="card bg-light text-center border-light shadow h-100">
    <!-- Card Image -->
            <img src="https://images.unsplash.com/photo-1565106430482-8f6e74349ca1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
            alt="pm_1" class="card-img-top" style="object-fit: cover; height:15em;">
    <!-- Card Body Starts -->
        <div class="card-body">
            <h3 class="card-title">Web Development</h3>
            <hr class="bg-primary">
            <p class="card-text">I have received my Web Development from Salt Lake Community College.  Course includes: HTML, CSS, JAVASCRIPT, PHP, WordPress.  I did a 6 week internship for GOPAC Inc. (Give Old People a Chance).  As part of a team of 6 interns, we created and set up their first web site! The owners were extremely pleased! It was a great opportunity to work and learn together.</p>
    <!-- Card Footer Starts -->
        <footer class="card-footer">
                <a href="#about" class="btn btn-outline-danger btn-lg mt-2">Learn more</a>
            </footer>
            </div>
            <!-- Card Ends -->
        </div>
        </div>
    <!-- Item Ends -->
    <!-- Item Starts -->
        <div class="col mb-4">
    <!-- Card Start -->
        <div class="card bg-light text-center border-light shadow h-100">
            <!-- Card Image -->
            <img src="https://images.unsplash.com/photo-1494859802809-d069c3b71a8a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
            alt="pm_1" class="card-img-top" style="object-fit: cover; height:15em;">
    <!-- Card Body Starts -->
        <div class="card-body">
            <h3 class="card-title">ISO Certified Auditor</h3>
            <hr class="bg-primary">
            <p class="card-text">I am ISO 9001 Lead Auditor Certified. I have audited over 50 companies for compliance to FDA requirements.  Companies include: Dietary Supplement Manufacturers and Customer facing suppliers, Food and Cosmetic companies, and Raw Material Suppliers. One of my favorite parts of auditing is identifying areas of improvement. I also managed our company Internal Auditing Department.</p>
    <!-- Card Footer Starts -->
        <footer class="card-footer">
                <a href="#about" class="btn btn-outline-danger btn-lg mt-2">Learn more</a>
        </footer>
            </div>
            <!-- Card Ends -->
        </div>
        </div>
        <!-- Item Ends -->
        </div>
    <!-- Item Row Ends -->
        </section>
  
    <!-- Contact Form -->
    <section id="contact">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3057.8476867797!2d-111.77537464843357!3d39.96715797931898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x874da8b0770bd7c9%3A0x24fe349240bc41ab!2s517%20575%20E%2C%20Santaquin%2C%20UT%2084655!5e0!3m2!1sen!2sus!4v1679012568306!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="container py-5">
    <!-- Title -->
    <div class="row justify-content-center text-center">
        <div class="col-md-6">
            <h2 class="display-4 font-weight-bold">Contact Me</h2>
            <hr />
        </div>
    </div>
    
    <!-- Adding Form -->
    <div class="row justify-content-center">
        <div class="col-6">
            <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST" novalidate>
        <!--Name Field-->
            <div class="form-group">
                <label for="name">Full Name:</label>
                <span class="text-danger">*<?php echo $nameErr; ?></span>
                <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" value="<?php if (isset ($name)) {echo $name;} ?>"/>
            </div>
        <!--Email Field-->
            <div class="form-group">
                <label for="email">Email address:</label>
                <span class="text-danger">*<?php echo $emailErr; ?></span>
                <input type="email" class="form-control" id="email"  placeholder="name@example.com" name="email" value="<?php if (isset ($email)) {echo $email;} ?>"/>
            </div>
        <!--Radio button Field-->
            <div class="form-group">
                <label class="control-label">Can we contact you back?</label>
                <span class="text-danger">*<?php echo $contBackErr; ?></span>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="contact-back" id="yes" value="Yes" <?php if ((isset ($contBack)) && ($contBack == "Yes")) {echo "checked";} ?> />
                    <label class="form-check-label" for="yes" >Yes</label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" name="contact-back" id="no" value="No"<?php if ((isset ($contBack)) && ($contBack == "No")) {echo "checked";} ?>/>
                <label class="form-check-label" for="no" >No</label>
                </div>
            </div>

    <!--Comments Field-->
            <div class="form-group">
                <label for="comments">Comments: </label>
                <textarea id="comments" class="form-control" rows="3" name="comments"><?php if (isset ($comments)) {echo $comments;} ?></textarea>
            </div>
    <!--Required Fields Note-->
            <div class="text-danger text-right">* Indicates required fields</div>

    <!--Submit Button-->
            <button class="btn btn-primary mb-2" type="submit" role="button" name="submit">Submit</button>
            </form>
        </div>
        </div>
    </div>
    <!-- Form Ends -->

<!--Modal-->
    <div class="modal fade" id="thankYouModal" tabindex="-1">
        aria-labelledby="thankYouModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="thankYouModalLabel">Thank You!</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Show Modal-->
    <?php
        if(isset($_SESSION['complete']) && $_SESSION['complete']) {
            echo "<script>$('#thankYouModal').modal('show');</script>";
            session_unset();
        }
    ?>
<!-- Footer Starts -->
    <footer class="py-4 bg-dark">
        <div class="container">
        <p class="m-0 text-center text-white">
            Copyright &copy; Marian Curtis 2022
        </p>
        </div>
    </footer>

</body>

</html>