<?php
class User {
    private ? int $Id = null;
    public function __construct(private string $firstName, private string $lastName, private string $email)
    {
       
    }

    public function getId() : int {
        return $this->Id;
    }
    public function setid(int $Id) : void {
        $this->Id = $Id;
    }

    public function getfirstName() : string {
        return $this->firstName;
    }
    public function setfirstName(string $firstName) : void {
        $this->firstName = $firstName;
    }

    public function getlastName() : string {
       return $this->lastName;
    }
    public function setlastName(string $lastName) : void {
        $this->lastName = $lastName;
    }

    public function getEmail() : string {
        return $this->email;
    }
    public function setEmail(string $email) : void {
        $this->email = $email;
    }


}