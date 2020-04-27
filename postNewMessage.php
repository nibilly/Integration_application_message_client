<?php
$text = htmlspecialchars($_POST['content']);
/*$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Message/api/message");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($_POST));
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded'
));
# curl_setopt($curl, CURLOPT_HEADER, 1);

$response = curl_exec($curl);
$header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
$body = substr($response, $header_size);
echo "<br>".$body;
curl_close($curl);*/
header("Location: http://localhost/message"); # retour accueil auto