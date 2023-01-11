<?php
session_start();
require_once '../class/User.php';
require_once '../class/Cards.php';
$user = new User();
if($user->isConnected()):
    $login = $_SESSION['login'];
endif;

if (isset($_POST['submit'])):

    //  Securiser les entrées.
    $login = htmlspecialchars(strip_tags(trim($_POST['username'])));
    $password = htmlspecialchars(strip_tags(trim($_POST['password'])));
    //  cryptage du password
    // $password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
    
    // Veriffier que le form est rempli. 
    $errs = [];
    if(empty($login) || !isset($login)):
        $errs[] = '<li> Veiller Remplir le Login </li>';
    endif;

    if(empty($password) || !isset($password)):
        $errs[] = '<li> Veiller Remplir le Password </li>';
    endif;

    if (empty($errs)):

        if($user->connect($login, $password)):
        $_SESSION['login'] = $login;
        else: $errs[] = 'Login ou Password incorect';
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
    <title>Connexion</title>
</head>
<body>
<?php require '../includes/header.php' ?>

<form action="#" method="post" class="form">
        <label for="username" placeholder="Votre Login">Login</label>
        <input type="text" name="username" placeholder="Votre Login">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Votre Password">
        <input type="submit" name="submit" value="Valider">
        <p class="errs"><?php
            if(isset($errs)):
                foreach($errs as $err):
                    echo $err;
                endforeach;
            endif;
        ?></p>
    </form>

<?php require '../includes/footer.php' ?>
</body>
</html>