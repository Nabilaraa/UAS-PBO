<?php

class main{
    private $cap;
    private $icon;
    private $num;
    private $symbol;
    public $letter;

    public function __construct($cap, $icon, $num, $symbol, $letter)
    {
        $this->cap = $cap;
        $this->icon = $icon;
        $this->num = $num;
        $this->symbol = $symbol;
        $this->letter = $letter;
    }

    public function print()
    {
        $a = $this->cap * 4;
        $b = $this->icon * 4 * 2;
        $c = $this->num * 2 * 3 * 8;
        $d = $this->symbol * 1 / 4;   

        $addFee = ($a + $b + $c + $d);

        echo ("Jumlah Karakter : " .($this->letter)) ."\n";
        echo ("Tambahan biayanya senilai : " .($addFee)) ." Rupiah \n";
        echo ("Total biaya yang harus dibayar : " .($this->letter + $addFee)) ." Rupiah \n";
    }    
}

$cap = 1;
$icon = 1;
$num = 2;
$symbol = 1;
$letter = 36;
$main = new main($cap, $icon, $num, $symbol, $letter);
$main->print();