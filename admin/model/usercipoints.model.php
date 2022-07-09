<?php

class ApproveCIPRequest extends Dbh
{
  protected function approveCIP($filter, $userid, $cipoints, $year, $semester)
  {
    $stmt = $this->connect()->prepare('UPDATE user_cip SET user_id = ?, total_cip = total_cip + ?, ay_id = ?, semester = ? WHERE user_id = ? AND ay_id = ? AND semester = ?;');

    if (!$stmt->execute([$userid, $cipoints, $year, $semester, $userid, $year, $semester])) {
      $stmt = null;
      header('location: ../view/usercipoints.php?id=' . $userid . '&filter=' . $filter . '&error=stmt1failed');
      exit;
    };

    $stmt = null;
  }

  protected function insertDataCIP($filter, $userid, $cipoints, $year, $semester)
  {
    $stmt = $this->connect()->prepare('INSERT INTO user_cip (user_id, total_cip, ay_id, semester) SELECT * FROM (SELECT ? AS id, ? AS points, ? AS year, ? AS sem) AS tmp WHERE NOT EXISTS (SELECT * FROM user_cip WHERE user_id = ? AND ay_id = ? AND semester = ?) LIMIT 1;');

    if (!$stmt->execute([$userid, $cipoints, $year, $semester, $userid, $year, $semester])) {
      $stmt = null;
      header('location: ../view/usercipoints.php?id=' . $userid . '&filter=' . $filter . '&error=stmt2failed');
      exit;
    };

    $stmt = null;
  }

  protected function udpateStatusCIP($filter, $id, $userid)
  {
    $stmt = $this->connect()->prepare('UPDATE user_request SET request_status = ? WHERE request_id = ?;');

    if (!$stmt->execute(['approved', $id])) {
      $stmt = null;
      header('location: ../view/usercipoints.php?id=' . $userid . '&filter=' . $filter . '&error=stmt3failed');
      exit;
    };

    $stmt = null;
  }
}

class RejectCIPRequest extends Dbh
{
  protected function rejectCIP($filter, $id, $userid)
  {
    $stmt = $this->connect()->prepare('UPDATE user_request SET request_status = ? WHERE request_id = ?');

    if (!$stmt->execute(['rejected', $id])) {
      $stmt = null;
      header('location: ../view/usercipoints.php?id=' . $userid . '&filter=' . $filter . '&error=stmtfailed');
      exit;
    };

    $stmt = null;
  }
}
