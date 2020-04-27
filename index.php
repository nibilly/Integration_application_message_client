<?php
/*
 *Requetes :
 * getUserId();
 * postUser(firstName, lastName);
 * getMessages();
 * deleteReadMessages();
 * getUnreadMessages(); # became read after been sent
 * postMessage(SenderId, receiverId, content);
 */
function getUnreadMessages()
{
    echo "De : Louis, Message : Comment vas-tu ?<br>De : Marie, Message : Réponds à Louis !";
    /*$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Message/api/message/unread");
    $response = curl_exec($curl);
    $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
    $header_string = substr($response, 0, $header_size);
    $body = substr($response, $header_size);
    echo $body;
    curl_close($curl);*/
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            Message
        </title>
        <link href="styles.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <h1>Home</h1>



        Messages non lus : <br>
        <?php getUnreadMessages();?>
        <br>
        <button><a href="newMessage.php">Nouveau message</a></button>
    </body>
</html>