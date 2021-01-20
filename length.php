<?php

class length extends main{

    public $letter;

    public function __construct($letter)
    {
        $this->letter = $letter;
    }

    public function checkLength()
    {
        $jumlah_karakter = strlen($this->letter);
        echo "Jumlah karakter = $jumlah_karakter karakter", " ";
        echo "dengan jumlah spasi = ".substr_count($this->letter, " ");
    }
    
}

$letter = "@Kamu yang berjuang, semangat yok. #no.22 ";
$length = new length($letter);
$length->checkLength();