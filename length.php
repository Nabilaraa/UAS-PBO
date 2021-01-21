<?php

require_once "machine.php";

class length extends machine{
    
    public function checkLength()
    {
        $jumlah_karakter = strlen($this->letter);
        echo "Jumlah karakter = $jumlah_karakter karakter", " ";
        echo "dengan jumlah spasi = ".substr_count($this->letter, " ");
    }  
}