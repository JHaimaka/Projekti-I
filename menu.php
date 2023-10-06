<?php require 'code/aktiivinen.php';?>

<?php
$current_page = current_page_name();
// echo "$current_page";
?>    
    <a href="index.php" <?php if ($current_page === 'index.php') echo 'class="active"'; ?>>Koti</a>
    <a href="tietoa.php" <?php if ($current_page === 'tietoa.php') echo 'class="active"'; ?>>Tietoa</a>

    <a href="hae.php" <?php if ($current_page === 'hae.php') echo 'class="active"'; ?>>Hae Tapahtumia</a>
  
   <a href="lisaa.php" <?php if ($current_page === 'lisaa.php') echo 'class="active"'; ?>>Lisää Tapahtumia</a>

   <a href="rekisteroidy.php" <?php if ($current_page === 'rekisteroidy.php') echo 'class="active"'; ?>>Rekisteröidy</a>

    <a href="palaute.php" <?php if ($current_page === 'palaute.php') echo 'class="active"'; ?>>Palaute</a>