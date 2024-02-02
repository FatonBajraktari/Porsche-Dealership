<?php
class User{
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $role;


    function __construct($first_name,$last_name,$email,$password,$role){
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
    }


    function getId(){
        return $this->id;
    }
    function getFirstName(){
        return $this->first_name;
    }
    function getLastName(){
        return $this->last_name;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    function getRole(){
        return $this->role;
    }
    
}


?>