<?php

//-- osszes ugyfel adatai JSON-ben
$sql = '';
if (count($keresSzoveg) > 1) {
    if (is_int(intval($keresSzoveg[1]))) {
        $sql = 'SELECT * FROM vevo WHERE vazon=' . $keresSzoveg[1];
        var_dump($sql);
    } else {
        http_response_code(404);
        echo 'Nem létező vevő';
    }
} else {
    $sql = 'SELECT * FROM vevo WHERE 1';
}
require_once './databaseconnect.php';
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    $vevo = array();
    while ($row = $result->fetch_assoc()) {
        $vevo[] = $row;
    }
    http_response_code(200);
    echo json_encode($vevo);
} else {
    http_response_code(404);
    echo 'Nincs egy vevő sem';
}