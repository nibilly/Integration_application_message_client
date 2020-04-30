<!DOCTYPE html>
<html lang="fr">
<head>
    <title>
        Messages
    </title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="styles.css" rel="stylesheet" media="all" type="text/css">
</head>

<body>
<div id="accueil">
    <div id="agenda">
        <a href="index.php" style="text-decoration:none"><h1>Messagerie</h1></a>
        <h2> Nouveau Message</h2>
        <form action="postNewMessage.php" method="post" id="newMessageForm">
            <p>A qui ?
                Prénom <input type="text" name="receiverFirstName">
                Nom <input type="text" name="receiverLastName">
            </p>
            <p>Quel est le message ? <br>
                <textarea form="newMessageForm" rows="4" cols="50" name="content"></textarea>
            </p>
            <p><input class="button" id="buttonevent" type="submit" value="Envoyer"></p>
        </form>
    </div>
</div>
</body>
</html>
