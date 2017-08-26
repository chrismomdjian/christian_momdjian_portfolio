<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span>Menu</span>
      </button>
      <a class="navbar-brand" href="http://chrismomdjian.com">Chris Momdjian</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		    <li class="<?php if($_SERVER["PHP_SELF"] == "/index.php"){ echo 'active';} ?>"><a href="index.php?title=home">HOME</a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/about.php"){ echo 'active';} ?>"><a href="about.php?title=about">ABOUT</a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/contact.php"){ echo 'active';} ?>"><a href="contact.php?title=contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
