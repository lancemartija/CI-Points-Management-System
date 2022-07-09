<?php

if (isset($_POST['approve'])) {
  $filter = ($_POST['filter'] == NULL || !isset($_POST['filter'])) ? NULL : $_POST['filter'];
  $id = trim($_POST['id']);
  $userid = trim($_POST['userid']);
  $cipoints = trim($_POST['cipoints']);
  $year = trim($_POST['year']);
  $semester = trim($_POST['semester']);

  include '../database/database.php';
  include '../model/usercipoints.model.php';
  include '../controller/usercipoints.contr.php';

  $approveCIPRequest = new ApproveCIPRequestContr($filter, $id, $userid, $cipoints, $year, $semester);
  $approveCIPRequest->approveCIPRequest();

  header('location: ../view/usercipoints.php?id=' . $_POST['userid'] . '&filter=' . $_POST['filter'] . '&message=approved');
}

if (isset($_POST['reject'])) {
  $filter = ($_POST['filter'] == NULL || !isset($_POST['filter'])) ? NULL : $_POST['filter'];
  $id = trim($_POST['id']);
  $userid = trim($_POST['userid']);

  include '../database/database.php';
  include '../model/usercipoints.model.php';
  include '../controller/usercipoints.contr.php';

  $rejectCIPRequest = new RejectCIPRequestContr($filter, $id, $userid);
  $rejectCIPRequest->rejectCIPRequest();

  header('location: ../view/usercipoints.php?id=' . $_POST['userid'] . '&filter=' . $_POST['filter'] . '&message=approved');
}
