<?php

class User3 
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // public function getName()
    // {
    //     return $this->name;
    // }

    final public function getName()
    {
        return $this->name;
    }
}

class Admin3 extends User3
{

    // public function getName()
    // {
    //     return "soy " . $this->name;
    // }

}

$admin = new Admin3('Pedro');
echo $admin->getName();