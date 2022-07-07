<?php


if (isset($_POST['submit'])) {

    $numberHrs = $_POST['number'];
    $userID = $_GET['user'];
    $actID = $_POST['activity_id'];

    $fileSize = $_FILES['files']['size'];
    $fileName = $_FILES['files']['name'];
    $fileType = $_FILES['files']['type'];
    $fileData = file_get_contents($_FILES['files']['tmp_name']);




    //image/png
    //application/pdf
    //image/jpeg
    //text/plain
    //application/vnd.openxmlformats-officedocument.wordprocessingml.document
    //application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
    //text/csv




    include '../database/database.php';
    include '../model/submitActivity.model.php';
    include '../controller/submitActivity.contr.php';

    $ActSubmit = new submitContr($userID, $actID, $fileName, $fileType, $fileData, $numberHrs, $fileSize);
    $ActSubmit->submitAct();

    header('location: ../view/dashboard.php?submit=success');
}
