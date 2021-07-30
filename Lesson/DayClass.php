<?php


class DayClass
{
    private ?string $image;
    private ?string $day;

    public function getImage() : string
    {
        return $this->image;
    }

    public function getDay() : int
    {
        return $this->day;
    }

    public function getDayName() : string
    {
        switch ($this->day){
            case 1:
                return "Monday";
                break;
            case 2:
                return "Tuesday";
                break;
        }
    }

    public function setImage(string $image)
    {
        $this->image = $image;

        return;
    }

    public function setDay(int $day)
    {
        $this->day = $day;

        return;
    }

}