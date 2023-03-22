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
