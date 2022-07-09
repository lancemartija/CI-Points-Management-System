<?php

if (isset($_POST['submit'])) {

  $numberHrs = $_POST['number'];
  $userID = $_GET['user'];
  $actID = $_POST['activity_id'];
  $totalfiles = count($_FILES['files']['name']);
  include '../database/database.php';
  include '../model/submitActivity.model.php';
  include '../controller/submitActivity.contr.php';

  for ($i = 0; $i < $totalfiles; $i++) {
    $fileSize = $_FILES['files']['size'][$i];
    $fileName = $_FILES['files']['name'][$i];
    $fileType = $_FILES['files']['type'][$i];
    $fileData = file_get_contents($_FILES['files']['tmp_name'][$i]);

   
    $ActSubmit = new SubmitContr($userID, $actID, $fileName, $fileType, $fileData, $numberHrs, $fileSize);
    $ActSubmit->submitAct();
  }





  //image/png
  //application/pdf
  //image/jpeg
  // print_r($fileName . "</br>");
  // print_r($fileType . '</br>');
  // print_r($userID);
  // print_r($actID);
  // print_r($fileData);

  header('location: ../view/dashboard.php?submit=success');
}
