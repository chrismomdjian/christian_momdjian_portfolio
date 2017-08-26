<?php
include("validateForm.php");
?>

<?php include("inc/header.php"); ?>

<?php include("inc/navbar.php"); ?>

<div class="container-fluid row-4">
	<h1 style="font-size: 3em;" class="headingTitle">Contact me</h1>
	<br>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
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
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 text-center general-contact-info">
        <h3><strong>Phone</strong>: <br><a href="tel:(818)641-4054">(818) 641-4054</a></h3>
        <br>
        <h3><strong>Email</strong>: <br><a href="mailto:chrismomdjian@gmail.com">chrismomdjian@gmail.com</a></h3>
        <br>
        <h3><strong>Github Repositories</strong>: <br><a href="http://www.github.com/chrismomdjian">github.com/chrismomdjian</a></h3>
      </div>
    </div>
</div>

<?php include("inc/footer.php"); ?>

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
