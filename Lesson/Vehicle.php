<?php


abstract class Ticket
{
    private $tyreNumber;
    private $seats;
    private $maxSpeed;

    public function setTyreNumber(int $tyre) {
        $this->tyreNumber = $tyre;
    }

    public function getTyreNumber () {
        return $this->tyreNumber;
    }

}