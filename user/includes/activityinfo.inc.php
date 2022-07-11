<?php

session_start();

if (isset($_POST['submit'])) {
  $userid = $_SESSION['userid'];
  $hours = $_POST['hours'];
  $id = $_POST['id'];
  $filesize = $_FILES['file']['size'];
  $filename = $_FILES['file']['name'];
  $filetype = $_FILES['file']['type'];
  $filedata = file_get_contents($_FILES['file']['tmp_name']);

  include '../database/database.php';
  include '../model/activityinfo.model.php';
  include '../controller/activityinfo.contr.php';

  $activityinfo = new SubmitRequestContr($userid, $hours, $id, $filesize, $filename, $filetype, $filedata);
  $activityinfo->submitRequest();

  header('location: ../view/ciactivities.php?submit=success');
}
