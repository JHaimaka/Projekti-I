<?php
$PALVELIN = $_SERVER['HTTP_HOST'];
$PALVELU = "projektit_PHP/php_sovellusmalli";
$LINKKI_RESETPASSWORD = "resetpassword.php";
$LINKKI_VERIFICATION = "verification.php";
$PALVELUOSOITE = "asiakaspalvelu@neilikka.fi";


$DB = "neilikka";


$LOCAL = in_array($_SERVER['REMOTE_ADDR'],array('127.0.0.1','REMOTE_ADDR' => '::1'));
if ($LOCAL) {	
    $tunnukset = "../../../tunnukset.php";
    if (file_exists($tunnukset)){
        include_once("../../../tunnukset.php");
        echo "tunnukset löytyi ..";
        } 
    else {
        die("Tiedostoa ei löydy, ota yhteys ylläpitoon.");
        } 
    $db_server = $db_server_local;
    $db_username = $db_username_local; 
    $db_password = $db_password_local;
    // $db_table_local määritetty tunnukset.php -tiedostossa
    }
elseif (strpos($_SERVER['HTTP_HOST'],"azurewebsites") !== false){
    $db_server = $_ENV['MYSQL_HOSTNAME'];
    $db_username = $_ENV['MYSQL_USERNAME'];
    $db_password = $_ENV['MYSQL_PASSWORD'];
    $db_password = $_ENV['MYSQL_TABLE'];
    }

?>