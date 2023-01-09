<?php
session_start();
$tab_card = ['a', 'a', 'b', 'b', 'c', 'c'];
require_once '../class/Card.php';
// for($x=1; $x<7; $x++):
//     $x = new Card($x);
// endfor;
// for($i=0; $i<6; $i++):
//     $x->image($i) = $tab_card[$i]. '.png';
// endfor;
// id="<?php// if(isset($_SESSION['depl'])): echo $_SESSION['depl']; else: echo 


// $i=0;
// for($j=0; $j<6; $j++):?>
<!-- <div><img src="<?php //echo '../img/'. $x->$i . '></div>'; -->
// // $i++;
// // endfor; ?>

?> -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Memory</title>
</head>
<body>
<?php
require '../includes/header.php';
?>
<main>      
<?php
$aa = new Card($aa);
$bb = new Card($bb);
$cc = new Card($cc);
$dd = new Card($dd);
$ee = new Card($ee);
$ff = new Card($ff);

$i=0;
for($j=0; $j<6; $j++):?>
<div><img src="<?php echo '../img/'. $x->$i . '></div>';
$i++;
endfor; ?>
</main>
<?php require 'includes/footer.php'; ?>
</body>
</html>