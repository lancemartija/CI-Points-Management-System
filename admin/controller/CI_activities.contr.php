<?php

class CIActicityContr extends CIActivities
{

    private $title;
    private $date;
    private $venue;
    private $description;
    private $type;
    private $duration;

    public function __construct($title, $date, $venue, $description, $type, $duration)
    {
        $this->title = $title;
        $this->date = $date;
        $this->venue = $venue;
        $this->description = $description;
        $this->type = $type;
        $this->duration = $duration;
    }

    public function AddActivities()
    {
        if ($this->Isempty() == false) {
            header('Location: ../view/Create_activity.php?error=emptyinput');
            exit;
        }

        $this->setActivity($this->title, $this->date, $this->venue, $this->description, $this->type, $this->duration);
    }


    private function Isempty()
    {

        if (empty($this->title) || empty($this->date) || empty($this->title) || empty($this->venue) || empty($this->description) || empty($this->type) || empty($this->duration)) {
            return false;
        }

        return true;
    }
}
