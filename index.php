<?php
// modificatio des valeur du cookie login
if (!empty($_POST['login'])) {
    $login = $_POST['login'];
    setcookie('login', $login, time() + (86400 * 30));
}
// modification des valeur du cookie password
if (!empty($_POST['password'])) {
    $password = $_POST['password'];
    setcookie('password', $password, time() + (86400 * 30));
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Exercice5</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />  
    </head>
    <body>
        <div class="d-inline-block bg-info m-5 p-5" style="border: 5px double red; font-size: 30px;">
            <p>
            <form action="#" method="POST">
            <p>
                <label>Login: </label>
                <input type="text" name="login"/>
                <label>Password: </label>
                <input type="password" name="password"/>
                <button type="submit" name="valider">Submit</button>
            </p>
            <?php
            // post permet de récupérer les données du formulaire
            if (empty($_POST['login'])) {
                ?>
                <p>Login non défini</p>
            <?php } else { ?>
                <p>Votre login modifie : <?= $_POST['login']; ?></p>
            <?php } ?>
            <?php
            // post permet de récupérer les données du formulaire
            if (empty($_POST['password'])) {
                ?>
                <p>Mot de passe non défini</p>
            <?php } else { ?>
                <p>Votre mot de passe modifie : <?= $_POST['password']; ?></p>
            <?php } ?>
        </form>
        </p>  
    </div>
</body>
</html>




   
