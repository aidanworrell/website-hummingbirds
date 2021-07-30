<?php

include_once("User.php");

class Admin extends User
{
    public function getStatus() {
        return true;
    }

}