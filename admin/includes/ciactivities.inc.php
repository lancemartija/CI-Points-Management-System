<?php

if (isset($_POST['add'])) {
  $title = $_POST['title'];
  $date = $_POST['date'];
  $venue = $_POST['venue'];
  $department = $_POST['department'];
  $division = $_POST['division'];
  $description = $_POST['description'];
  $type = $_POST['type'];
  $duration = $_POST['duration'];
  $supervisor = ($_POST['supervisor'] == NULL) ? NULL : $_POST['supervisor'];
  $cipoints = $_POST['cipoints'];
  $year = $_POST['year'];
  $semester = $_POST['semester'];

  include_once '../database/database.php';
  include_once '../model/ciactivities.model.php';
  include_once '../controller/ciactivities.contr.php';

  $AddActivity = new CIActivityContr($title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $cipoints, $year, $semester);
  $AddActivity->AddActivities();

  header('Location: ../view/ciactivities.php?success=addedsuccessfully');
}


if (isset($_POST['edit'])) {
  $id = $_POST['id'];
  $title = $_POST['title'];
  $date = $_POST['date'];
  $venue = $_POST['venue'];
  $department = $_POST['department'];
  $division = $_POST['division'];
  $description = $_POST['description'];
  $type = $_POST['type'];
  $duration = $_POST['duration'];
  $supervisor = ($_POST['supervisor'] == NULL) ? NULL : $_POST['supervisor'];
  $cipoints = $_POST['cipoints'];
  $year = $_POST['year'];
  $semester = $_POST['semester'];

  include_once '../database/database.php';
  include_once '../model/ciactivities.model.php';
  include_once '../controller/ciactivities.contr.php';

  $EditActivity = new EditActivityContr($id, $title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $cipoints, $year, $semester);
  $EditActivity->EditActivity();

  header('Location: ../view/ciactivities.php?success=editedsuccessfully');
}

if (isset($_POST['delete'])) {
  $id = trim($_POST['id']);

  include '../database/database.php';
  include '../model/ciactivities.model.php';
  include '../controller/ciactivities.contr.php';

  $deleteActivity = new DeleteActivityContr($id);
  $deleteActivity->DeleteActivity();

  header("location: ../view/ciactivities.php?status=deletedsuccessfully");
}
