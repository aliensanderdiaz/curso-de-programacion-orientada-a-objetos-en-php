<?php

interface Person13
{
    public function getName();
}

class Admin implements Person13
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$admin = new Admin('admin');

echo $admin->getName();