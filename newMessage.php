<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            Message
        </title>
        <link href="styles.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <a href="index.php" style="text-decoration: none"><h1>Home</h1></a>

        <form action="postNewMessage.php" method="post">
            <p>Message : <input type="text" name="content"/></p>
            <p><input type="submit" value="Envoyer"></p>
        </form>
    </body>
</html>
