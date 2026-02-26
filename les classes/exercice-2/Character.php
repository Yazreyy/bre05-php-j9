<?php

class Character{
    private string $firstName = "Jane";
    private string $lastName = "Doe";
    
public function __construct( public int $id) {
    
}

public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getfirstName(): string
    {
        return $this->firstName;
    }

    public function setfirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }


    public function getlastName() : string
    {
        return $this->lastName;
    }
    public function setlastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }

    public function getFullName() : string {
       return $this->firstName . " " . $this->lastName;
    }
}






















