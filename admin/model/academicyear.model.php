<?php

class AddAcademicYear extends Dbh
{
  protected function setAcademicYear($year)
  {
    $stmt = $this->connect()->prepare('INSERT INTO academic_year (year) values (?)');

    if (!$stmt->execute([$year])) {
      $stmt = null;
      header("Location: ../view/academicyear.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}

class EditAcademicYear extends Dbh
{
  protected function setAcademicYear($id, $year)
  {
    $stmt = $this->connect()->prepare('UPDATE academic_year SET year = ? WHERE ay_id = ?;');

    if (!$stmt->execute([$year, $id])) {
      $stmt = null;
      header("location: ../academicyear.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}

class DeleteAcademicYear extends Dbh
{
  protected function setAcademicYear($id)
  {
    $stmt = $this->connect()->prepare('DELETE FROM academic_year WHERE ay_id = ?;');

    if (!$stmt->execute([$id])) {
      $stmt = null;
      header("Location: ../view/academicyear.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}
