<?php

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $duration = $_POST['duration'];

    include '../database/database.php';
    include '../model/CI_activities.model.php';
    include '../controller/CI_activities.contr.php';

    $AddActivity = new CIActicityContr($title, $date, $venue, $description, $type, $duration);
    $AddActivity->AddActivities();

    header('Location: ../view/CI_Activities.php?success=Activitycreated');
}
