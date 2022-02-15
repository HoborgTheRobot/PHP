<?php

class Song
{
    public $songID;
    public $title;
}
Class Playlist
{
    public $name;
    public $songs = [];
    public function addSong($song)
    {
        $this->songs[] = $song;
    }
}
$newSong = new Song();
$newSong->songID = 2;
$newSong->title = "Breaking The Law";

$objectSong = new Song();
$objectSong->songID = 1;
$objectSong->title = "Octopus's Garden";
//var_dump($objectSong);

$objPlaylist = new Playlist();
$objPlaylist->name = 'Rock';
$objPlaylist->addSong($objectSong);
$objPlaylist->addSong($newSong);
var_dump($objPlaylist->songs);
