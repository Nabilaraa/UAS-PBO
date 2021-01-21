<?php

class machine{
    private $cap;
    private $icon;
    private $num;
    private $symbol;
    private $total;
    
    public $letter;

    public function __construct($cap, $icon, $num, $symbol, $total, $letter)
    {
        $this->cap = $cap;
        $this->icon = $icon;
        $this->num = $num;
        $this->symbol = $symbol;
        $this->total = $total;
        $this->letter = $letter;
    }

    public function print()
    {
        $a = $this->cap * 4;
        $b = $this->icon * 4 * 2;
        $c = $this->num * 2 * 3 * 8;
        $d = $this->symbol * 1 / 4;   

        $addFee = ($a + $b + $c + $d);
        echo ("Jumlah Karakter : " .($this->total)) ."\n";
        echo ("Tambahan biayanya senilai : " .($addFee)) ." Rupiah \n";
        echo ("Total biaya yang harus dibayar : " .($this->total + $addFee)) ." Rupiah \n";
    }    
}

$cap = 1;
$icon = 1;
$num = 2;
$symbol = 1;
$total = 36;
$letter = "@Kamu yang berjuang, semangat yok. #no.22 " ;