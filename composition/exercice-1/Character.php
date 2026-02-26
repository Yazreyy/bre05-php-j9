<?php

require_once 'Weapon.php';


class Character{
    private Weapon $weapon;
    public function __construct(private string $name)
    {
        $this->weapon = new Weapon("", 0);
    }

    public function getName() : string {
        return $this->name;
    }

    public function setName(string $name) : void {
        $this->name = $name;
    }

    public function getWeapon() : Weapon {
        return $this -> weapon;
    }

    public function setWeapon($weapon) : void {
        $this->weapon = $weapon;
    }

    public function Fight() {
        return $this->weapon->strike();
    }

}
?>