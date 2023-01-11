<?php
class cards{
    private $tab_cards = ['a.jpeg', 'b.jpeg', 'c.jpeg', 'a.jpeg', 'b.jpeg', 'c.jpeg', 'd.jpeg', 'e.jpeg', 'f.jpeg', 'd.jpeg', 'e.jpeg', 'f.jpeg', 'g.jpeg', 'h.jpeg', 'i.jpeg', 'g.jpeg', 'h.jpeg', 'i.jpeg'];
    private $tab_cards_level = ['a.jpeg', 'b.jpeg', 'c.jpeg', 'a.jpeg', 'b.jpeg', 'c.jpeg'];

    // stokage du tableau des cards dans une variable session, avec shuffle pour melanger les cards.
    public function __construct()
    {
        if (!isset($_SESSION['tab_cards_level'])):
            shuffle($this->tab_cards_level);
            $_SESSION['tab_cards_level'] = $this->tab_cards_level;
        else:
            $this->tab_cards_level = $_SESSION['tab_cards_level'];
        endif;
        var_dump($_SESSION['tab_cards_level']);
    }




}