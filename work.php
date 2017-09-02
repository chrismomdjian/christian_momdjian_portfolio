<?php
require "inc/connect.php";
$query = "SELECT * FROM work";
$execute = $handler->query($query);
?>

<?php include("inc/header.php"); ?>

<?php include("inc/navbar.php"); ?>

<div class="container-fluid row-1 text-center">
	<h1 style="font-size: 3em;" class="headingTitle">Work Archive</h1>
	<br>
	<div class="row">
	<div class="col-xs-12 col-md-3">
	</div>
	<div class="col-xs-12 col-md-6">
    <!-- Projects fetched from MySQL dynamically -->
    <ul class="list-group">
    <?php while($row = $execute->fetch(PDO::FETCH_OBJ)): ?>
      <li class="list-group-item">
        <a href="<?php echo $row->url; ?>" alt="<?php echo $row->alt; ?>" target="_blank">
          <?php echo $row->title; ?>
        </a>
      </li>
    <?php endwhile; ?>
    </ul>
	</div>
	<div class="col-xs-12 col-md-3">
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
</body>
</html>
