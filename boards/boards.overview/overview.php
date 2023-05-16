<?php
if (!isset($site)) {
  $site = $_SERVER['DOCUMENT_ROOT'];
}
if (!isset($page_title)) {
  $page_title = "overview";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include "$site/modules/html.header/header.php"; ?>
</head>

<body class="g-sidenav-show   bg-gray-100">
<nav class="navbar navbar-expand-lg py-3 bg-dash-dark-2 border-bottom border-dash-dark-1 z-index-10">
  <!-- <div class="min-height-300 bg-primary position-absolute w-100"></div> -->

  <?php
  include "$site/boards/boards.overview/overview.canvas.php"; //Main
  //include "$site/modules/site.config/site.config.php"; //Site Config
  // include "$site/assets/Scripts/scripts.js.core.php"; //Core JS Files 

  ?>
</nav>
</body>

</html>