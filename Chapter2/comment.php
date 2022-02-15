<?php

class Comment
{
    public $text;
    public $userID;


    public function __construct($text, $userID)
    {
        $this->text = $text;
        $this->userID = $userID;
    }

}
