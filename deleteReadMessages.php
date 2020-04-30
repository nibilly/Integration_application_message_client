<?php
session_start();
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Message/api/user/".$_SESSION["userIdMessage"]."/message/read");
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_exec($curl);
curl_close($curl);
header("Location: http://localhost/message/mesMessages");