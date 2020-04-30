<?php
session_start();
function getUnreadMessages(){
    if(isset($_SESSION['userIdMessage'])) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Message/api/user/".$_SESSION['userIdMessage']."/message/unread");
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
        <p> Nous sommes le <strong><?php echo date('d-m-Y '); ?></strong></p>
        <form method="post" action="getUser.php">Utilisateur :
            Prénom : <input id="prenom" name="firstName" type="text">
            Nom : <input id="nom" name="lastName" type="text">
            <input class="button" type="submit" value="Se connecter">
        </form><br>
        <form method="post" action="postNewUser.php">Nouvel utilisateur :
            Prénom : <input id="newprenom" name="firstName" type="text">
            Nom : <input id="newnom" name="lastName" type="text">
            <input class="button" type="submit" value="Ajouter utilisateur">
        </form>
        <h2> Messages non lus </h2>
        <button class="button" id="buttonevent" onclick="window.location.href = 'newMessage.php';">Nouveau message</button>
        <button class="button" id="buttonevent" onclick="window.location.href = 'mesMessages.php';">Tous mes messages</button>
        <table class="table table-condensed table-bordered">
            <?php getUnreadMessages()?>
        </table></div>

</div>
</body>
</html>
