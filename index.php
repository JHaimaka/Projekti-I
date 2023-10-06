<!DOCTYPE html>
<html lang="fi">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tanssipalvelin</title>
<link rel="stylesheet" href="styles/layout.css">
</head>

<body>
<?php include 'header.php';?>
  <main>

    <div class="purpose-section">
        <h2>Sivun tarkoitus (index.php)</h2>

        <!-- <?php include 'code/sivun_tarkoitus.php';?> -->
    </div>

    <div class="event-section">
        <h2 id="viikon_tapahtumat">Tulevat tapahtumat</h2>
        <?php require 'code/viikon_tapahtumat_SQL.php';?>

    </div>
    
    <div>
        <!-- Tähän pääsisällön -->
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
