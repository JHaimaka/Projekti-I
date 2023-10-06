<?php 

include_once("asetukset.php");



// echo " .... luo yhteys ... <br>";
// echo "<h2>Luodaan yhteys tunnuksilla: $db_server, $db_username, $db_password, $tietokanta</h2>";

$yhteys = mysqli_connect($db_server, $db_username, $db_password, $db_table);

if (!$yhteys) {
  $virheviesti = "Yhteys MySQL-tietokantaan epäonnistui: " . mysqli_connect_error();
  die($virheviesti);
}
  else {
    // echo " .... yhteyden muodostus - OK ... <br> <br>";
}


// ------ KYSELY 1 ------
$kyselysql = "SELECT tapahtuma_nimi, tapahtuma_alku_paiva, tapahtuma_alku_aika, tapahtuma_paikka FROM tapahtuma";

// echo " <h4>.... suoritetaan kysely $kyselysql </h4><br>";
$tulos = mysqli_query($yhteys, $kyselysql);
if (!$tulos) {
  die("Taulukysely epäonnistui: <br>" . mysqli_error($yhteys));
}

if ($tulos) {

  echo "<table>";
  echo "<tr><th>Tapahtuma</th><th>Päivä</th><th>Aika</th><th>Paikka</th></tr>";
  
  // Hae ja tulosta tietueet
  while ($rivit = mysqli_fetch_assoc($tulos)) {
      echo "<tr>";
      // echo "<td>" . $rivit['tapahtuma_id'] . "</td>";
      echo "<td>" . $rivit['tapahtuma_nimi'] . "</td>";
      echo "<td>" . $rivit['tapahtuma_alku_paiva'] . "</td>";
      echo "<td>" . $rivit['tapahtuma_alku_aika'] . "</td>";
      echo "<td>" . $rivit['tapahtuma_paikka'] . "</td>";
      echo "</tr>";
  }
    echo "</table>";
} else { echo "Kysely epäonnistui: " . mysqli_error($yhteys);
  }

$yhteys->close();







// ------ KYSELY 2 ------
/*
$kyselysql = "SELECT teksti, luku FROM esim_taulu";
echo " <h2>.... suoritetaan kysely $kyselysql </h2><br>";
$tulos = mysqli_query($yhteys, $kyselysql);

//Tarkista kyselyn onnistuminen
if (!$tulos) {
   die("Kysely epäonnistui: <br>" . mysqli_error($yhteys));
}
*/

// Tulosta kyselyn tulos
/*
 echo "<h2>Taulu 'test' sisältö:</h2>";
 echo "<table>";
 echo "<tr>
    <th>teksti</th>
    <th>Luku</th>
  </tr>";

while ($rivi = mysqli_fetch_assoc($tulos)) {
     echo "<tr>";
     echo "<td>" . $rivi['teksti'] . "</td>";
    echo "<td>" . $rivi['luku'] . "</td>";
     echo "</tr>";
}
 echo "</table>";
*/
// ------ KYSELY 2 ------
?>