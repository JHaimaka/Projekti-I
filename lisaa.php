<!DOCTYPE html>
<html lang="fi">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tanssipalvelin</title>
<link rel="stylesheet" href="styles/layout.css">
</head>

<body>
<!-- ---------------- PHP alkaa ------------------------ -->

<?php require 'code/aktiivinen.php';?>

<?php
$current_page = current_page_name();
echo "$current_page";
?>


<!-- <?php include 'menu.php';?> -->
<!-- ---------------- PHP loppuu ------------------------ -->

  <div style="padding:0 16px">
      <h3>Tanssipalvelin pääkaupunkiseudun tanssijoille</h3>
      <h3>Lisaa tapahtumia</h3>
  </div>

  <div class="navbar">
    <a href="index.php" <?php if ($current_page === 'index.php') echo 'class="active"'; ?>>Koti</a>
    <div class="subnav">
      <button class="subnavbtn">Tietoa <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <a href="lavatanssit.php" <?php if ($current_page === 'lavatanssit.php') echo 'class="active"'; ?>>Lavatanssit</a>
        <a href="rock_swing.php" <?php if ($current_page === 'rock_swing.php') echo 'class="active"'; ?>>Rock & Swing</a>
        <a href="lattarit.php" <?php if ($current_page === 'lattarit.php') echo 'class="active"'; ?>>Lattarit</a>
      </div>
    </div> 
    <div class="subnav">
      <button class="subnavbtn">Hallitse Tapahtumia <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <a href="lisaa.php" <?php if ($current_page === 'lisaa.php') echo 'class="active"'; ?>>Lisää</a>
        <a href="poista.php" <?php if ($current_page === 'poista.php') echo 'class="active"'; ?>>Poista</a>
        <a href="rekisteroidy.php" <?php if ($current_page === 'rekisteroidy.php') echo 'class="active"'; ?>>Rekisteröidy</a>
      </div>
    </div>
    <a href="hae.php" <?php if ($current_page === 'hae.php') echo 'class="active"'; ?>>Hae Tapahtumia</a>
    <a href="palaute.php" <?php if ($current_page === 'palaute.php') echo 'class="active"'; ?>>Palaute</a>
  </div>
  

  <main>

    <div class="purpose-section">
        <h2>Tässä osiossa määritellään mitä lisätään</h2>
        <!-- Tähän voit lisätä sivun tarkoituksen sisällön -->
        <?php include 'code/sivun_tarkoitus.php';?>
    </div>

    <!-- <div class="event-section">
        <h2 id="viikon_tapahtumat">Tulevat tapahtumat</h2>
     </div> -->
    
    <div>
        <!-- Tähän voit lisätä pääsisällön -->
    </div>
</main>


<footer> 
<?php include 'code/footer.php';?>
</footer> 

<!-- ---------------- Javascript  ------------------------ -->
<!-- <script src="code/code.js"></script> -->
<!-- ---------------- Javascript  ------------------------ -->

</body>
</html>
