<?php

abstract class Base2
{
    protected $name;

    private function getClassName()
    {
        return get_called_class();
    }

    public function login()
    {
        return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
    }

}

class Admin extends Base2
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class User extends Base2
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Guest extends Base2
{
    protected $name = 'Invitado';
}

$guest = new Guest();
echo $guest->login();
echo "<br>";

$user = new User("Juliana");
echo $user->login();
echo "<br>";

$admin = new Admin("Pedro");
echo $admin->login();
echo "<br>";