<?php
include("validateForm.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chris Momdjian | Web Developer | Contact</title>
  <meta charset="utf-8">
  <meta name="description" content="Los Angeles based web developer who is aiming to
  work as a junior full-time programmer. Skills include HTML, CSS, JavaScript,
  jQuery, PHP and MySQL, Bootstrap, Git/Github and much more!">
  <meta name="keywords" content="web developer, junior web developer, javascript developer, front-end developer,
  php developer, junior programmer, software developer, christian momdjian, chris momdjian, programmer, website developer">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span>Menu</span>
      </button>
      <a class="navbar-brand" href="index.html">Chris Momdjian</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		    <li><a href="index.html">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="contact.html">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid row-4">
	<h1 style="font-size: 3em;" class="headingTitle">Contact me</h1>
	<br>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="cForm" name="cForm" class="cForm">
          <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" class="form-control input-lg" id="fullName" name="fullName">
            <div id="name_error"></div>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control input-lg" id="email" name="email">
            <div id="email_error"></div>
          </div>
          <div class="textarea">
            <label for="comment">Comment:</label>
              <textarea class="form-control input-lg" id="comment" name="comment"></textarea>
              <div id="comment_error"></div>
          </div><br>
          <input type="button" class="formButton" id="submitBtn" name="submitMe" value="SUBMIT">
        </form>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 text-center general-contact-info">
        <h3><strong>Phone</strong>: <br><a href="tel:(818)641-4054">(818)641-4054</a></h3>
        <br>
        <h3><strong>Email</strong>: <br><a href="mailto:chrismomdjian@gmail.com">chrismomdjian@gmail.com</a></h3>
        <br>
        <h3><strong>Github Repositories</strong>: <br><a href="http://www.github.com/chrismomdjian">github.com/chrismomdjian</a></h3>
      </div>
    </div>
</div>

<footer class="container-fluid footer text-center">
	<div class="row">
		<div class="col-xs-12 col-md-4">
			<a href="tel:(818)641-4054"><span class="btn btn-lg btn-success" id="call_to_action">(818).641.4054</span></a>
		</div>
		<div class="col-xs-12 col-md-4">
			<h3><strong>Email: </strong><br><a href="mailto:chrismomdjian@gmail.com">chrismomdjian@gmail.com</a></h3>

		</div>
		<div class="col-xs-12 col-md-4">
			<h3><strong>Github Repos: </strong>
			<a href="https://www.github.com/chrismomdjian" target="_blank">github.com/chrismomdjian</a></h3>
		</div>
	</div>
	<br>
  <ul id="footerNav">
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
	<br>
	<p><a href="http://chrismomdjian.com"><span id="currentDate"></span> chrismomdjian.com </a></p>
</footer>
<script>
  //Copyright year for footer
  var dateCopyright = document.getElementById("currentDate");
  var date = new Date();
  dateCopyright.innerHTML = "&copy;" + date.getFullYear();

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

var $ = function(id) {
return document.getElementById(id);
}


/////////////////////////CONTACT FORM VALIDATION/////////////////////////

var submitData = function() {

    var emailField = $("email").value;
    var nameField = $("fullName").value;
    var commentField = $("comment").value;
    var emailStatus = $("email_error");
    var nameStatus = $("name_error");
    var commentStatus = $("comment_error");
    var isValid = true;

    if(nameField == ""){
      nameStatus.innerHTML = "Please fill in the name field.";
      isValid = false;
    } else if(emailField == "") {
      emailStatus.innerHTML = "Please enter a valid email address.";
      isValid = false;
    } else if(commentField == "") {
      commentStatus.innerHTML = "Please fill in the comment field.";
      isValid = false;
    }

    if(isValid) {
      $("cForm").submit();
    }

}


window.onload = function() {
  var submitButton = $("submitBtn");
  submitButton.addEventListener("click", submitData);
  $("fullName").focus();
}

</script>
</body>
</html>