<?php

namespace App;

class Post
{

    public $comments = [];
    public function addComment(Comment $comment)
    {
        // array_push($this->comments, $comment);
        $this->comments[] = $comment;
    }

    public function countComments()
    {
        return count($this->comments);
    }

    public function getComments()
    {
        return $this->comments;
    }
}
