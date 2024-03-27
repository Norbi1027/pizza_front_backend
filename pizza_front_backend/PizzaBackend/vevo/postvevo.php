<?php

//echo 'POST';
//$azon = $_POST["azon"];
$vnev = $_POST["vnev"];
$vcim = $_POST["vcim"];
require_once './databaseconnect.php';
$sql = "INSERT INTO vevo(vazon, vnev, vcim) VALUES (NULL,?,?)";
$stmt = $connection->prepare($sql);
$stmt->bind_param('ss', $vnev, $vcim);
if ($stmt->execute()) {
    http_response_code(201);
    $errorJson=array("message" => 'Sikeresen hozzáadva');
} else {
    http_response_code(404);
    $errorJson=array("error_message" => 'Nem sikerült hozzáadni');
}