<?php 
// tämä php -tiedosto on kansiossa C:\xampp\htdocs\projektit_PHP\PHP_MySQL_v4.php ja tunnukset.php kansiossa C:\xampp
//

$tunnukset = "../../../tunnukset.php";
 if(file_exists($tunnukset)) {
  require $tunnukset;
//  echo "<h2> Tunnukset haettu : $db_server_local $db_user_local $db_password_local $db_table_local</h2><br>";
} else {
  die("Tiedostoa: $tunnukset ei löydy.");
}

// echo "<h2>Tiedostosta haun jälkeen: $db_server_local $db_user_local $db_password_local $db_table_local</h2>";

$palvelin = $db_server_local;
$kayttajatunnus = $db_user_local;  
$salasana = $db_password_local; 
$tietokanta = $db_table_local;

// echo " .... luo yhteys ... <br>";
// echo "<h2>Luodaan yhteys tunnuksilla: $palvelin, $kayttajatunnus, $salasana, $tietokanta</h2>";

$yhteys = mysqli_connect($palvelin, $kayttajatunnus, $salasana, $tietokanta);

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