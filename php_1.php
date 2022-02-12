<?php

class User
{
    public $name;
    public $username;
    public $followerCount;
}

$sebusObject = new User();

$sebusObject->name = 'Sebastian Gumula';
$sebusObject->username = '@sebussuperprogramista';
$sebusObject->followerCount = 50;

print_r($sebusObject);

