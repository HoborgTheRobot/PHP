<?php

class Reservation
{
    //cancel
    private $host= 'Host Class'; // Host class
    private $guest = 'Guest Class'; // Guest class
    public function cancel()
    {
        $this->sendCancellationNotification();
        $this->refundGuest();
    }
    private function sendCancellationNotification()
    {
        echo 'Sending notification to ' . $this->host . '<br>';
    }

    private function refundGuest()
    {
        echo 'Refunding ' . $this->guest . '<br>';
    }
}
