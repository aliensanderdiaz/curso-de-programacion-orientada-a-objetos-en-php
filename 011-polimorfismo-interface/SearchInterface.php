<?php

interface Search
{
    public function all();
}

class User2 implements Search
{
    public function all()
    {
        return "obteniendo a los users, XML";
    }
}

class Post implements Search
{
    public function all()
    {
        return "obteniendo a los posts, JSON";
    }
}

$user = new User2();
echo $user->all();

echo "<br>";

$post = new Post();
echo $post->all();

echo "<br>";