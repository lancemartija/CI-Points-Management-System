<?php

class AddAcademicYearContr extends AddAcademicYear
{
  private $year;

  public function __construct($year)
  {
    $this->year = $year;
  }

  public function addAcademicYear()
  {
    if ($this->isEmpty() == false) {
      header("Location: ../view/academicyear.php?error=emptyinput");
      exit;
    }

    $this->setAcademicYear($this->year);
  }

  private function isEmpty()
  {
    if (empty($this->year)) {
      return false;
    }
    return true;
  }
}

class EditAcademicYearContr extends EditAcademicYear
{
  private $id;
  private $year;

  public function __construct($id, $year)
  {
    $this->id = $id;
    $this->year = $year;
  }

  public function editAcademicYear()
  {
    if ($this->isEmpty() == false) {
      header("Location: ../view/academicyear.php?error=emptyinput");
      exit;
    }

    $this->setAcademicYear($this->id, $this->year);
  }

  private function isEmpty()
  {
    if (empty($this->id) || empty($this->year)) {
      return false;
    }
    return true;
  }
}

class DeleteAcademicYearContr extends DeleteAcademicYear
{
  private $id;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function deleteAcademicYear()
  {
    $this->setAcademicYear($this->id);
  }
}
