<?php

if (isset($_POST['approve'])) {
  $status = ($_POST['status'] == NULL) ? NULL : $_POST['status'];
  $id = trim($_POST['id']);
  $userid = trim($_POST['userid']);
  $cipoints = trim($_POST['cipoints']);
  $year = trim($_POST['year']);
  $semester = trim($_POST['semester']);

  include '../database/database.php';
  include '../model/userrequests.model.php';
  include '../controller/userrequests.contr.php';

  $approveUserRequest = new ApproveUserRequestContr($status, $id, $userid, $cipoints, $year, $semester);
  $approveUserRequest->approveUserRequest();

  header('location: ../view/userrequests.php?id=' . $_POST['userid'] . '&status=' . $_POST['status'] . '&message=approved');
}

if (isset($_POST['reject'])) {
  $status = ($_POST['status'] == NULL) ? NULL : $_POST['status'];
  $id = trim($_POST['id']);
  $userid = trim($_POST['userid']);

  include '../database/database.php';
  include '../model/userrequests.model.php';
  include '../controller/userrequests.contr.php';

  $rejectUserRequest = new RejectUserRequestContr($status, $id, $userid);
  $rejectUserRequest->rejectUserRequest();

  header('location: ../view/userrequests.php?id=' . $_POST['userid'] . '&status=' . $_POST['status'] . '&message=approved');
}
