<?php

class CIActivityContr extends CIActivities
{
    private $title;
    private $date;
    private $venue;
    private $department;
    private $division;
    private $description;
    private $type;
    private $duration;
    private $supervisor;
    private $cipoints;
    private $year;
    private $semester;

    public function __construct($title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $cipoints, $year, $semester)
    {
        $this->title = $title;
        $this->date = $date;
        $this->venue = $venue;
        $this->department = $department;
        $this->division = $division;
        $this->description = $description;
        $this->type = $type;
        $this->duration = $duration;
        $this->supervisor = $supervisor;
        $this->cipoints = $cipoints;
        $this->year = $year;
        $this->semester = $semester;
    }

    public function AddActivities()
    {
        if ($this->isEmpty() == false) {
            header('Location: ../view/ciactivities.php?error=emptyinput');
            exit;
        }

        $this->setActivity($this->title, $this->date, $this->venue, $this->department, $this->division, $this->description, $this->type, $this->duration, $this->supervisor, $this->cipoints, $this->year, $this->semester);
    }


    private function isEmpty()
    {
        if (empty($this->title) || empty($this->date) || empty($this->venue) || empty($this->department) || empty($this->division) || empty($this->supervisor) || empty($this->type) || empty($this->duration) || empty($this->cipoints) || empty($this->year) || empty($this->semester)) {
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
    private $department;
    private $division;
    private $supervisor;
    private $description;
    private $type;
    private $duration;
    private $cipoints;
    private $year;
    private $semester;

    public function __construct($id, $title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $cipoints, $year, $semester)
    {
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->venue = $venue;
        $this->department = $department;
        $this->division = $division;
        $this->description = $description;
        $this->type = $type;
        $this->duration = $duration;
        $this->supervisor = $supervisor;
        $this->cipoints = $cipoints;
        $this->year = $year;
        $this->semester = $semester;
    }

    public function EditActivity()
    {
        if ($this->isEmpty() == false) {
            header('Location: ../view/ciactivities.php?id=' . $this->id . '&error=emptyinput');
            exit;
        }

        $this->setActivity($this->id, $this->title, $this->date, $this->venue, $this->department, $this->division, $this->description, $this->type, $this->duration, $this->supervisor, $this->cipoints, $this->year, $this->semester);
    }

    private function isEmpty()
    {
        if (empty($this->title) || empty($this->date) || empty($this->venue) || empty($this->type) || empty($this->duration) || empty($this->supervisor) || empty($this->cipoints) || empty($this->year) || empty($this->semester)) {
            return false;
        }

        return true;
    }
}
