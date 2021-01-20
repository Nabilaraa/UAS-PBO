<?php

class char extends main{

    public $letter;

    public function __construct($letter)
    {
        $this->letter = $letter;
    }

    public function checkLetter()
    {
        echo("Jumlah 'K' dalam kata : ".substr_count($this->letter, "K")."\n");
        echo("Jumlah '#' dalam kata : ".substr_count($this->letter, "#")."\n");
        echo("Jumlah '2' dalam kata : ".substr_count($this->letter, "2")."\n");
        echo("Jumlah '@' dalam kata : ".substr_count($this->letter, "@")."\n");

    }
}

$letter = "@Kamu yang berjuang, semangat yok. #no.22 " ;
$char = new char($letter);
$char->checkLetter();