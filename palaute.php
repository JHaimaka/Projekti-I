<!DOCTYPE html>
<html lang="fi">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tanssipalvelin</title>
<link rel="stylesheet" href="styles/layout.css">
</head>

<body>

  <div style="padding:0 16px">
      <h3>Tanssipalvelin pääkaupunkiseudun tanssijoille</h3>
  </div>

  <div class="navbar">
  <?php include 'menu.php';?>  </div>
  

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
