<?php

//-- osszes ugyfel adatai JSON-ben
$sql = '';
if (count($keresSzoveg) > 1) {
    if (is_int(intval($keresSzoveg[1]))) {
        $sql = 'DELETE FROM vevo WHERE vazon=' . $keresSzoveg[1];
    } else {
        http_response_code(404);
        echo 'Nem létező vevő';
    }
}
require_once './databaseconnect.php';

if ($result = $connection->query($sql)) {
    http_response_code(201);
    echo 'Sikeres törlés';
} else {
    http_response_code(404);
    echo 'Sikertelen törlés';
}