<?php


if (isset($_POST['submit'])) {

    $numberHrs = $_POST['number'];
    $userID = $_GET['user'];
    $actID = $_POST['activity_id'];

    $fileName = $_FILES['files']['name'];
    $fileType = $_FILES['files']['type'];
    $fileData = file_get_contents($_FILES['files']['tmp_name']);



    //image/png
    //application/pdf
    //image/jpeg


    // print_r($fileName . "</br>");
    // print_r($fileType . '</br>');
    // print_r($userID);
    // print_r($actID);
    // print_r($fileData);




    include '../database/database.php';
    include '../model/submitActivity.model.php';
    include '../controller/submitActivity.contr.php';

    $ActSubmit = new submitContr($userID, $actID, $fileName, $fileType, $fileData, $numberHrs);
    $ActSubmit->submitAct();

    header('location: ../view/dashboard.php?submit=success');
}
