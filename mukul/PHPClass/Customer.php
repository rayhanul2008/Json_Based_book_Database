<?php

class Customer{
    public $id;
    public $firstname;
    public $lastname;
    public $email;

    public function __construct(
        int $id,
        string $firstname,
        string $lastname,
        string $email
    ){
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }
    public function __get($name){
        if($name == 'id'){
            return $this->id;
        }
        elseif($name == 'firstname'){
            return $this->firstname;
        }
        elseif($name == 'lastname'){
            return $this->lastname;
        }
        elseif($name == 'email'){
            return $this->email;
        }
        return null;
    }
    public function __set($name, $value){
        if($name == 'id'){
            $this->id = $value;
        }
        elseif($name == 'firstname'){
            $this->firstname = $value;
        }
        elseif($name == 'lastname'){
            $this->lastname = $value;
        }
        elseif($name == 'email'){
            $this->email = $value;
        }
    }
}

?>