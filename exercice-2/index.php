<?php

require 'Character.php';

$character1 = new character(1);

echo $character1->getFullName();

$character1 ->setfirstName("Sarah");
$character1 ->setlastName("Connor");

echo $character1->getFullName();
?>