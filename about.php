<?php include("inc/header.php"); ?>

<?php include("inc/navbar.php"); ?>

<div class="container-fluid row-1 text-center">
	<h1 style="font-size: 3em;" class="headingTitle">About me</h1>
	<br>
	<div class="row">
	<div class="col-xs-12 col-md-3">
	</div>
	<div class="col-xs-12 col-md-6">
	<p class="text-justify"><strong>I love programming</strong>. I started programming in 2016
		when a friend of mine showed me an HTML book written by Jon Duckett. I immediately began
		writing HTML code (along with some CSS) to create some basic websites. It didn't take long before I
		knew that programming would be my newfound passion.
  <br><br>
  <strong>I'm constantly learning.</strong> I'm always eager to learn new technologies and frameworks as I
	progress in my programming career. My recent interests have been focusing on working with RESTful APIs and writing cleaner, more modular programs. Retrieving, updating and formatting data to present to users in a sleek, and
	simple interface is something I always work on improving when writing code.
	<br><br>
	 I enjoy blending both back-end and front-end code together to form clean and cohesive projects and apps.
	 What inspires me to write better code is seeing the way programmers can mix back-end functionality
	 with front-end frameworks like Bootstrap to build data-driven websites while keeping a good user experience
	 (along with browser support and device-width) in mind.
  <br><br>
  	My ultimate goal however, is to become a <strong>great developer</strong> and to
  	help clients and businesses achieve their goals.
  </p>
	<hr>
	<p>
  My skills include <strong>HTML5, CSS3, Javascript/jQuery, PHP &amp; SQL, Python 3+,
  Nodejs, Wordpress, Bootstrap, Git/Github, creating icons, Flat UI Graphics, and website mockups/
	wireframes using Inkscape, Linux navigation and command utilities, Slack</strong>
  and much more!
  </p>
	</div>
	<div class="col-xs-12 col-md-3">
	</div>
	</div>

</div>

<div class="container-fluid row-2">
	<div class="row text-center">
		<h1 style="font-size: 3em;" class="headingTitle">Hobbies</h1>
		<div class="col-xs-12 col-md-4">
			<a href="#" data-toggle="modal" data-target="#modal-1">
				<img src="images/gameboy.png" alt="Flat UI Design Gameboy" class="icons img-responsive center-block img-circle">
			</a>
			<h2>8-bit Gamer</h2>
		</div>
		<div class="col-xs-12 col-md-4">
			<a href="#" data-toggle="modal" data-target="#modal-2">
				<img src="images/skateboard.png" alt="Flat UI Design Skateboard" class="icons img-responsive center-block img-circle">
			</a>
			<h2>Skateboarder</h2>
		</div>
		<div class="col-xs-12 col-md-4">
			<a href="#" data-toggle="modal" data-target="#modal-3">
				<img src="images/camera.png" alt="Flat UI Design Camera" class="icons img-responsive center-block img-circle">
			</a>
			<h2>Photographer</h2>
		</div>
	</div>
</div>

<!-- Modal Popup Windows for Hobbies Section -->
<?php include "inc/modals.php"; ?>

<?php include("inc/footer.php"); ?>

<script>
  //Copyright year for footer
  var dateCopyright = document.getElementById("currentDate");
  var date = new Date();
  dateCopyright.innerHTML = "&copy;" + date.getFullYear();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
