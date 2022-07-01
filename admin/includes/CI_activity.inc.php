<?php

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $duration = $_POST['duration'];
    $maxValue = $_POST['maxPoints'];

    include '../database/database.php';
    include '../model/CI_activities.model.php';
    include '../controller/CI_activities.contr.php';

    $AddActivity = new CIActivityContr($title, $date, $venue, $description, $type, $duration, $maxValue);
    $AddActivity->AddActivities();

    header('Location: ../view/CI_Activities.php?success=Activitycreated');
}


if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $duration = $_POST['duration'];
    $maxValue = $_POST['maxPoints'];

    include '../database/database.php';
    include '../model/CI_activities.model.php';
    include '../controller/CI_activities.contr.php';

    $EditActivity = new EditActivityContr( $id,$title, $date, $venue, $description, $type, $duration, $maxValue);
    $EditActivity->EditActivity();

    header('Location: ../view/CI_Activities.php?success=ActivityEdit');
}
