<?php
class Person{
    public $name,$email;

    function setName($name){

        $this->name=$name;
    }

    function getName($name){

        return $this->name;
    }
    

    function setEmail($email){

        $this->email=$email;
    }
    function getEmail(){

        return $this->email;
    }

}
