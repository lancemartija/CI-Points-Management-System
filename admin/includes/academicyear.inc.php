<?php

if (isset($_POST['add'])) {
  $year = trim($_POST['year']);

  include '../database/database.php';
  include '../model/academicyear.model.php';
  include '../controller/academicyear.contr.php';

  $AddAcademicYear = new AddAcademicYearContr($year);
  $AddAcademicYear->addAcademicYear();

  header("location: ../view/academicyear.php?status=addedsuccessfully");
}

if (isset($_POST['edit'])) {
  $id = trim($_POST['id']);
  $year = trim($_POST['year']);

  include '../database/database.php';
  include '../model/academicyear.model.php';
  include '../controller/academicyear.contr.php';

  $EditAcademicYear = new EditAcademicYearContr($id, $year);
  $EditAcademicYear->editAcademicYear();

  header("location: ../view/academicyear.php?status=editedsuccessfully");
}

if (isset($_POST['delete'])) {
  $id = trim($_POST['id']);

  include '../database/database.php';
  include '../model/academicyear.model.php';
  include '../controller/academicyear.contr.php';

  $DeleteAcademicYear = new DeleteAcademicYearContr($id);
  $DeleteAcademicYear->deleteAcademicYear();

  header("location: ../view/academicyear.php?status=deletedsuccessfully");
}
