<?php

require_once "machine.php";

$machine = new machine($cap, $icon, $num, $symbol, $total, $letter);
$machine->print();