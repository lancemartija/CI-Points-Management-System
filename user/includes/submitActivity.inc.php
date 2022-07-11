<?php

if (isset($_POST['submit'])) {

  print_r($_FILES);

  $numberHrs = $_POST['number'];
  $userID = $_GET['user'];
  $actID = $_POST['activity_id'];
  $totalfiles = count($_FILES['files']['name']);
  $fileSize = $_FILES['files']['size'];
  $fileName = $_FILES['files']['name'];
  $fileType = $_FILES['files']['type'];
  $fileData = file_get_contents($_FILES['files']['tmp_name']);

  //image/png
  //application/pdf
  // print_r($actID);
  // print_r($fileData);

  include '../database/database.php';
  include '../model/submitActivity.model.php';
  include '../controller/submitActivity.contr.php';

  $ActSubmit = new SubmitContr($userID, $actID, $fileName, $fileType, $fileData, $numberHrs, $fileSize);
  $ActSubmit->submitAct();
  header('location: ../view/dashboard.php?submit=success');
}
