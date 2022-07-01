<?php

class CIActivityContr extends CIActivities
{

    private $title;
    private $date;
    private $venue;
    private $description;
    private $type;
    private $duration;
    private $maxValue;

    public function __construct($title, $date, $venue, $description, $type, $duration, $maxValue)
    {
        $this->title = $title;
        $this->date = $date;
        $this->venue = $venue;
        $this->description = $description;
        $this->type = $type;
        $this->duration = $duration;
        $this->maxValue = $maxValue;
    }

    public function AddActivities()
    {
        if ($this->Isempty() == false) {
            header('Location: ../view/Create_activity.php?error=emptyinput');
            exit;
        }

        $this->setActivity($this->title, $this->date, $this->venue, $this->description, $this->type, $this->duration, $this->maxValue);
    }


    private function Isempty()
    {

        if (empty($this->title) || empty($this->date) || empty($this->title) || empty($this->venue) || empty($this->description) || empty($this->type) || empty($this->duration) || empty($this->maxValue)) {
            return false;
        }

        return true;
    }
}

class EditActivityContr extends EditActivity
{
    private $id;
    private $title;
    private $date;
    private $venue;
    private $description;
    private $type;
    private $duration;
    private $maxValue;

    public function __construct($id, $title, $date, $venue, $description, $type, $duration, $maxValue)
    {
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->venue = $venue;
        $this->description = $description;
        $this->type = $type;
        $this->duration = $duration;
        $this->maxValue = $maxValue;
    }

    public function EditActivity()
    {

        if ($this->Isempty() == false) {
            header('Location: ../view/CI_activityEdit.php?error=emptyinput');
            exit;
        }

        $this->setActivity($this->id, $this->title, $this->date, $this->venue, $this->description, $this->type, $this->duration, $this->maxValue);
    }

    private function Isempty()
    {

        if (empty($this->id) || empty($this->title) || empty($this->date) || empty($this->venue) || empty($this->description) || empty($this->type) || empty($this->duration) || empty($this->maxValue)) {
            return false;
        }

        return true;
    }
}
