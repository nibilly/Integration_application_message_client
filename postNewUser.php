<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Message/api/user/");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($_POST));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded'
));
$response = curl_exec($curl);
curl_close($curl);
$url = "Location: http://localhost/message";
header($url); # retour accueil auto