<?php
class Cards
{
    public $name;
    private $depl;
    public $valu;
    private $tab_card_value = ['a.png', 'b.png', 'c.png', 'a.png', 'b.png', 'c.png'];
    // private $tab_card = ['a', 'b', 'c', 'd', 'e', 'f'];
    public function __construct()
    {
        // $this->name = $name;
    }
    public function deply(){
        // $this->depl = $depl;
        return true;
    }
    // public function image($x){
    //     return $x.'.png';
    // }
    // public function valu(){
    //     return $this->valu;
    // }
    public function affich(){
        return
            '<table>
    <tbody>
        <tr>
        <td><img src="img/' . $this->tab_card_value[0] . '"></td>
        <td><img src="img/' . $this->tab_card_value[1] . '"></td>
        <td><img src="img/' . $this->tab_card_value[2] . '"></td>
        </tr>
        <tr>
        <td><img src="img/' . $this->tab_card_value[3] . '"></td>
        <td><img src="img/' . $this->tab_card_value[4] . '"></td>
        <td><img src="img/' . $this->tab_card_value[5] . '"></td>
        </tr>
    </tbody>
</table>';
    }

// shuffle()
}