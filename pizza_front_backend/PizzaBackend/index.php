<?php
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

    $keresSzoveg = explode('/', $_SERVER['QUERY_STRING']); //szét darabolja a nagyobb karakterláncot
    if ($keresSzoveg[0] === 'vevo') {
        require_once 'vevo/index.php';
    } else {
        http_response_code(405);
        //Hibaüzenet küldése JSON formátumban
        $errorJson=array("error_message" => 'Nincs ilyen api');
        return json_encode($errorJson);
    }