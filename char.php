<?php

class char extends main{

    public $letter;

    public function __construct($letter)
    {
        $this->letter = $letter;
    }

    public function checkLetter()
    {
        echo("Jumlah 'K' dalam kata : ".substr_count($this->letter, "K")."<BR />");
        echo("Jumlah '#' dalam kata : ".substr_count($this->letter, "#")."<BR />");
        echo("Jumlah '2' dalam kata : ".substr_count($this->letter, "2")."<BR />");
        echo("Jumlah '@' dalam kata : ".substr_count($this->letter, "@")."<BR />");

    }
}

$letter = "@Kamu yang berjuang, semangat yok. #no.22 " ;
$char = new char($letter);
$char->checkLetter();