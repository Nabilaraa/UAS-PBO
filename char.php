<?php

require_once "machine.php";

class char extends machine{

    public function checkLetter()
    {
        echo("Jumlah 'K' dalam kata : ".substr_count($this->letter, "K")."\n");
        echo("Jumlah '#' dalam kata : ".substr_count($this->letter, "#")."\n");
        echo("Jumlah '2' dalam kata : ".substr_count($this->letter, "2")."\n");
        echo("Jumlah '@' dalam kata : ".substr_count($this->letter, "@")."\n");
    }
}