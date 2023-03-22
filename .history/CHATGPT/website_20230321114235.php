<?php
// set up database connection
$host = "mysql.kberrio.slccwebdev.com";
$dbname = 'mydatabase';
$username = "kb_student";
$password = "@Tacos4Life@";

try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
  exit;
}

// process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = isset($_POST['contact']) ? 'Yes' : 'No';
  $comments = $_POST['comments'];

  // insert data into database
  $stmt = $db->prepare("INSERT INTO contacts (name, email, contact, comments) VALUES (:name, :email, :contact, :comments)");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':contact', $contact);
  $stmt->bindParam(':comments', $comments);
  $stmt->execute();
}
?>


function toggleNav() {
  var nav = document.querySelector('nav');
  nav.classList.toggle('active');
}

<!DOCTYPE html>
<html>
<head>
	<title>My Portfolio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<header>
		<h1>My Portfolio</h1>
	</header>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Skills</a></li>
			<li><a href="#">About Me</a></li>
			<li><a href="#">Interests</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		<div class="burger" onclick="toggleNav()">&#9776;</div>
	</nav>
	<main>
		<h2>Contact Me</h2>
		<form method="post" action="submit.php">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" required><br>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required><br>
			<label for="contact">Contact Back?</label>
			<input type="checkbox" name="contact" id="contact"><br>
			<label for="comments">Comments:</label><br>
			<textarea name="comments" id="comments" rows="5"></textarea><br>
			<input type="submit" value="Submit">
		</form>
		<section>
			<h2>Skills</h2>
			<p>I am skilled in HTML, CSS, JavaScript, and PHP.</p>
		</section>
		<section>
			<h2>About Me</h2>
			<p>I am a web developer with 5 years of experience.</p>
		</section>
		<section>
			<h2>Interests</h2>
			<p>I enjoy hiking, reading, and playing video games in my free time.</p>
		</section>
	</main>
	<footer>
		<p>&copy; 2023 My Portfolio</p>
	</footer>
</body
