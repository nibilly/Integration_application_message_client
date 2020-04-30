<?php
session_start();
if(isset($_SESSION['userIdMessage'])) {
    $text = htmlspecialchars($_POST['content']);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Message/api/user/".$_SESSION['userIdMessage']."/message");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($_POST));
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded'
    ));
    curl_exec($curl);
    curl_close($curl);
}
header("Location: http://localhost/message"); # retour accueil auto