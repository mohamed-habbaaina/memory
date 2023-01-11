<?php
session_start();
require_once '../class/User.php';
require_once '../class/Cards.php';
$user = new User();
if (isset($_POST['submit'])):

    // Veriffier que le form est rempli. 
    $errs = [];
    //  Securiser les entrées.
    $login = htmlspecialchars(strip_tags(trim($_POST['username'])));
    $password = htmlspecialchars(strip_tags(trim($_POST['password'])));
    $repass = htmlspecialchars(strip_tags(trim($_POST['repass'])));

    if(empty($login) || !isset($login)):
        $errs[] = '<li> Veiller Remplir le Login </li>';
    endif;

    if(empty($password) || !isset($password)):
        $errs[] = '<li> Veiller Remplir le Password </li>';
    endif;

    if(empty($repass) || !isset($repass)):
        $errs[] = '<li> Veiller Confirmer Votre Password</li>';
    endif;

    // verifier que l'utilisateur a rentrer le meme password. 
    if ($password !== $repass):
    $errs[] = '<li>Veiller rentrer le meme password</li>';
    else:
        //  cryptage du password
        $password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
    endif;

    if (empty($errs)):

        // veriffier que le Login est dispo dans la DB.
        if (empty($user->verif_db($login))):
            $user->register($login, $password);
        else: $errs[] = '<li>Le login n\'est pas disponible, Veuillez le changer !</li>';
        endif;

    endif;

    



endif;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<?php require '../includes/header.php' ?>

<main>
    <form action="#" method="post">
        <?php
            if(isset($errs)):
                foreach($errs as $err):
                    echo $err;
                endforeach;
            endif;
        ?>
        <label for="username" placeholder="Votre Login">Login</label>
        <input type="text" name="username" placeholder="Votre Login">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Votre Password">
        <label for="repass">Confirme Password</label>
        <input type="password" name="repass" placeholder="Confirme Password">
        <input type="submit" name="submit" value="Valider">
    </form>
</main>

<?php require '../includes/footer.php' ?>
</body>
</html>