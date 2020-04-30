<?php
session_start();
$curl = curl_init();
$query = http_build_query(["firstName"=>$_POST['firstName'], "lastName"=>$_POST['lastName']]);
curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Message/api/user?".$query);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($curl);
curl_close($curl);
$url = "Location: http://localhost/message";
if(strcmp($response, "-1") != 0){
    $_SESSION['userIdMessage'] = $response;
}
header($url); # retour accueil auto
