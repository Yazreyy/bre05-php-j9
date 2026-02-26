<?php
require_once 'Character.php';
require_once 'Weapon.php';

$hero = new Character("Ragnar");


echo $hero->getName();

$hero->getWeapon()->setName("Sword");
$hero->getWeapon()-> setDamages(10);

echo "{$hero->getWeapon()->getName()} {$hero->getWeapon()->getDamages()}";
echo $hero->Fight();


?>