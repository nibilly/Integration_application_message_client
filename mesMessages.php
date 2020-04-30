<?php
session_start();
function getMessages(){
    if(isset($_SESSION['userIdMessage'])) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Message/api/user/".$_SESSION['userIdMessage']."/message");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($curl);
        echo $response;
        curl_close($curl);
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            Messages
        </title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="styles.css" rel="stylesheet" media="all" type="text/css">
    </head>

    <body>
        <div id="accueil">
            <div id="agenda">
                <a href="index.php" style="text-decoration:none"><h1>Messagerie</h1></a>
                    <h2> Mes Messages</h2>
                <button class=" button" id="buttonevent" onclick="window.location.href = 'deleteReadMessages.php';">Tout supprimer</button>
                <table class="table table-condensed table-bordered">
                    <?php getMessages()?>
                </table></div>

        </div>
    </body>
</html>
