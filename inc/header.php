<?php
if ($_GET["title"] == "home") {
  $headTitle = "";
} else if ($_GET["title"] == "about") {
  $headTitle = "| About";
} else if ($_GET["title"] == "contact") {
  $headTitle = "| Contact";
} else {
  $headTitle = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chris Momdjian | Web Developer  <?php echo $headTitle; ?></title>
  <meta charset="utf-8">
  <meta name="description" content="Los Angeles based web developer who is aiming to
  work as a junior full-time programmer. Skills include HTML, CSS, JavaScript,
  jQuery, PHP and MySQL, Bootstrap, Git/Github and much more!">
  <meta name="keywords" content="web developer, junior web developer, javascript developer, front-end developer,
  php developer, junior programmer, software developer, christian momdjian, chris momdjian, programmer, website developer">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
  <link rel="stylesheet" href="style.css" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
