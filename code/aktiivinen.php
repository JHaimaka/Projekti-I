<?php
// Tämä funktio palauttaa nykyisen sivun nimen ilman tiedostopäätettä (esim. .php)
function current_page_name() {
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}
?>