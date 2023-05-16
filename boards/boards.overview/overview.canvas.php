<?PHP
if (!isset($site)) {
    $site = $_SERVER['DOCUMENT_ROOT'];
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Aside -->
<?php include "$site/modules/page.sidebar/bar.side.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1><?php include "modules/page.topnav/header.top.php"; ?></h1>
      <!-- Main content code here -->
<main class="main-content position-relative border-radius-lg">
    <!--Navbar-->
    <!--End Navbar-->
    <!-- Content -->
    <?php include "$site/boards/boards.overview/overview.canvas.content.php"; ?>
    <!-- /Content -->
</main>
</div>
</div>
</div>
</html>