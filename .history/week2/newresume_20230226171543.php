<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <!-- Adding Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-danger shadow sticky-top">
      <a href="#" class="navbar-brand p-3">Curtis</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navContent">
        <ul class="navbar-nav">
          <li class="navbar-item"><a href="#about" class="nav-link">About</a></li>
          <li class="navbar-item"><a href="#portfolio" class="nav-link">Portfolio</a></li>
          <li class="navbar-item"><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </nav>
    <div>
      <?php
      $mySkills = array ('Project Management', 'Auditing', 'Process Improvement', 'Web Development', 'kayaking');
      function newList($array) {
          echo '<ul>';
          foreach ($array as $s) {
              echo '<li>' . $s . '</li>';
          }
          echo '</ul>';
      }
      echo '<h1>My Skills Include: </h1>';
      newList($mySkills);
      ?>
    </div>

    <!-- Header -->
    <header class="mainHeader">
      <div class="container-fluid h-100">
        <div class="row align-items-center justify-content-center text-center text-white h-100">
          <div class="col-lg-8">
            <h1 class="display-1 font-weight-bold p-5">
              Marian <span class="font-weight-light">Curtis</span>
            </h1>
            <hr>
            <p class="font-weight-light mx-5">
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
            <img src="http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcRE5XOh_YqdX4bL6Odws96f4mluAZwyvTQojtTgCyLS0yQji5imeRjfhkw-yhFVh1jFg7j4QwMp5ux48GQ" alt="kevin_avatar" class="img-fluid">
          </div>
          <div class="col-md-8 my-3">
            <h2 class="font-weight-bold">Marian Curtis</h2>
            <hr class="my-4">
            <p class="font-weight-light mx-5">Sometimes, you just gotta eat some tacos!</p>
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
            <img
              src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
              alt="pm_1" class="card-img-top" style="object-fit: cover; height:15em;">
            <!-- Card Body Starts -->
            <div class="card-body">
              <h3 class="card-title">Project Management</h3>
              <hr class="bg-primary">
              <p class="card-text">I worked on several projects and ate tacos too. One of my favorite things to do as a
                Project Manager is to interact with developers, hear their stories, and learn together.</p>
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
            <img
              src="https://images.unsplash.com/photo-1565106430482-8f6e74349ca1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
              alt="pm_1" class="card-img-top" style="object-fit: cover; height:15em;">
            <!-- Card Body Starts -->
            <div class="card-body">
              <h3 class="card-title">Web Development</h3>
              <hr class="bg-primary">
              <p class="card-text">I worked on several projects while eating tacos. One of my favorite things to do as a
                Project Manager is to interact with developers, hear their stories, and learn together.</p>
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
            <img
              src="https://images.unsplash.com/photo-1494859802809-d069c3b71a8a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
              alt="pm_1" class="card-img-top" style="object-fit: cover; height:15em;">
            <!-- Card Body Starts -->
            <div class="card-body">
              <h3 class="card-title">ISO Certified Auditor</h3>
              <hr class="bg-primary">
              <p class="card-text">I am ISO 9001 Lead Auditor Certified. I have audited over 50 compaies for compliance to FDA requirements.  Companies include: Dietary Supplement Manufacturers and Customer facing suppliers, Food and Cosmetic companies, and Raw Material Suppliers.worked on several projects and ate tacos too. One of my favorite parts of auditing is identifying areas of improvement.</p>
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

  <?php
    $nameErr = $emailErr = $contBackErr = "";
    $name = $email = $contBack = $comment = "";
    $formErr = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST["name"])) {
				$nameErr = "Name is required.";
        $formErr = true;
			} else {
				$name = cleanInput($_POST["name"]);
        if (!preg_match ("/"))

			}
			
			if (empty($_POST["email"])) {
				$emailErr = "Email is required.";
        $formErr = true;
			} else {
				$email = cleanInput($_POST["email"]);
			}
			
			if (empty($_POST["contact-back"])) {
				$contBackErr = "Please let us know if we can contact you back.";
        $formErr = true;
			} else {
				$contBack = cleanInput($_POST["contact-back"]);
			}
			
			$comment = cleanInput($_POST["comments"]);
    }
    function cleanInput($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>
    <!-- Contact Form -->
    <section id="contact">
      <div class="container py-5">
        <!-- Title -->
        <div class="row justify-content-center text-center">
          <div class="col-md-6">
            <h2 class="display-4 font-weight-bold">Contact Me</h2>
            <hr>
          </div>
        </div>

        <!-- Adding Form -->
        <div class="row justify-content-center">
          <div class="col-6">
            <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">
            <!--Name Field-->
              <div class="form-group">
                <label for="name">Full Name:</label>
                <span class="text-danger">*<?php echo $nameErr; ?></span>
                <input type="text" class="form-control" placeholder="Full Name" name="name"/>
              </div>
              <!--Email Field-->
              <div class="form-group">
                <label for="email">Email address:</label>
                <span class="text-danger">*<?php echo $emailErr; ?></span>
                <input type="email" class="form-control" id="email"  placeholder="name@example.com" name="email"/>
              </div>
              <!--Radio button Field-->
              <div class="form-group">
                <label class="control-label">Can we contact you back?</label>
                <span class="text-danger">*<?php echo $contBackErr; ?></span>
                <div class="form-check">
                  <input type="radio" class="form-check-input" name="contact-back" id="yes" value="Yes" checked />
                  <label class="form-check-label" for="yes" >Yes</label>
                </div>

                <div class="form-check">
                <input type="radio" class="form-check-input" name="contact-back" id="no" value="No" checked />
                  <label class="form-check-label" for="no">No</label>
                </div>
              </div>

              <!--Comments Field-->
              <div class="form-group">
                <label for="comments">Comments: </label>
                <textarea id="comments" class="form-control" rows="3" name="comments"></textarea>
              </div>

              <!--Required Fields Note-->
              <div class="text-danger text-right">* Indicates required fields</div>

              <!--Submit Button-->
              <button class="btn btn-primary mb-2" type="submit" role="button" name="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Form Ends -->

    <?php if (($_SERVER["REQUEST_METHOD"] == "POST") && (!($formErr))) { ?>

    <section id="results" style="background-color: lightsteelblue;">
		<div class="container py-2" >
			<div class="row ">
				<h1>Form Entries:</h1>
			</div>
			<div class="row">
				<ul>
					<?php
					if ($name !== "") { echo "<li>NAME: $name </li>"; }
					if ($email !== "") { echo "<li>EMAIL: $email </li>"; }
					if ($contBack !== "") { echo "<li>CONTACT BACK: $contBack </li>"; }
					if ($comment !== "") { echo "<li>COMMENT: $comment </li>"; }

 
					?>
				</ul>
			</div>
		</div>
	</section>
  <?php } ?>

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