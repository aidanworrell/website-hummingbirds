<?php
include_once("DayClass.php");

class User
{

    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;
    private DayClass $day;

    public function setFirstName( $firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName( $lastName) {
        $this->lastName = $lastName;
    }

    public function setDay( $day) {
        $this->day = $day;
    }

    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }

    public function getFirstName( ) {
        return $this->firstName;
    }

    public function getLastName( ) {
        return $this->lastName;
    }

    public function getDay( ) {
        return $this->day;
    }

    public function getTomorrow() {
        return $this->day->getDay() + 1;
    }

    public function getStatus() {
        return false;
    }

}