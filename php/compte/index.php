<?php
include('cnx/cnx.php');
$message = '';
if (isset($_POST['créer'])) {
    $login = $_POST['login'];
    $pass  = $_POST['pass'];
    if (!empty($login) && !empty($pass)) {
        // on vérifie si le login existe DEBUT
        $sql = <<< 'EOST'
            SELECT login
            FROM user
            WHERE login = :login
        EOST;
        $requete = $cnx->prepare($sql);
        $requete->execute([':login' => $login]);
        if ($requete->rowcount() == 0) {
            // on insère le nouvel utilisateur : début
            $sql = <<< 'EOST'
                INSERT INTO user (login, pass)
                VALUES (:login, :pass)
            EOST;
            $requete = $cnx->prepare($sql);
            $requete->execute(
                [':login' => $login, ':pass' => $pass]
            );
            $message = <<< 'EOST'
                <p class="success">Votre compte a bien été créé
                    <a href="acces.php">Accès compte</a>
                </p>
            EOST;
            // on insère le nouvel utilisateur : fin
        } else {
            $message = '<p class="error">Ce login est déjà utilisé</p>';    
        }


        // on vérifie si le login existe FIN

    } else {
        $message = '<p class="error">Merci de remplir tous les champs</p>';
    }

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="ergonomie/css/style.css">
</head>
<body>
    <section>
        <form action="" method="post">
            <capture>Créez votre compte</capture>
            <?=$message;?>
            <input type="text" name="login" id="login" placeholder="login"/>
            <input type="text" name="pass" id="pass" placeholder="mot de passe"/>
            <input type="submit" name="créer" value="Créer un compte"/>
        </form>
        <a href="acces.php">Accès compte</a>
    </section>
</body>
</html>
