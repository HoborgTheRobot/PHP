<?php

class Connection
{
    private static int $count = 0;

    private string $connectionID;

    private int $conferenceID = 1234;

    public function __construct()
    {
        self::$count++;
    }

    public function __destruct()
    {
        return self::$count--;
    }

    public function __get($conferenceID)
    {
        return $this->$conferenceID;
    }
    public function getCount()
    {
        return self::$count;
    }

    public function __toString()
    {
        return "Conference ID: {$this->conferenceID} <br> Connection ID: {$this->connectionID}";
    }

    public function setConnectionID($ipAddress)
    {
        if(filter_var($ipAddress, FILTER_VALIDATE_IP))
        {
            $this->connectionID = $ipAddress . '_' . self::$count;

            return;
        }

        die('Not a valid IP address');
    }

    public function getConnectionID($ipAddress)
    {
        return $this->connectionID; 
    }
}