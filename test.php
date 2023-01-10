<?php
require_once 'class/Cards.php';
$cards = new Cards();

// $i = 0;
// foreach ($tab_card as $cart):
//     $cart[$i] = new Card($tab_card[$i]);
//     $i++;
// endforeach;

// var_dump($cart);


// $bb->valu() = $tab_card_value[0];
// $cc->valu($tab_card_value[1]);
// $dd->valu($tab_card_value[1]);
// $ee->valu($tab_card_value[2]);
// $ff->valu($tab_card_value[2]);

// var_dump($aa, $bb, $cc, $dd, $ee, $ff);
// if($aa->valu() === $bb->valu())

$tab_card = ['a', 'b', 'c', 'd', 'e', 'f'];
shuffle($tab_card);
// var_dump($new_tab);
var_dump($tab_card);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>test</title>
</head>
<body>
    
<?php //echo $cards->affich(); ?>

<!-- <table>
    <tbody>
        <tr>
            <td><img src="img/a.png"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table> -->

</body>
</html>
