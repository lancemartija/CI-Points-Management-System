<?php

class ApproveUserRequest extends Dbh
{
  protected function approve($status, $userid, $cipoints, $year, $semester)
  {
    $stmt = $this->connect()->prepare('UPDATE user_cip SET user_id = ?, total_cip = total_cip + ?, ay_id = ?, semester = ? WHERE user_id = ? AND ay_id = ? AND semester = ?;');

    if (!$stmt->execute([$userid, $cipoints, $year, $semester, $userid, $year, $semester])) {
      $stmt = null;
      header('location: ../view/userrequests.php?id=' . $userid . '&status=' . $status . '&error=stmt1failed');
      exit;
    };

    $stmt = null;
  }

  protected function insertData($status, $userid, $cipoints, $year, $semester)
  {
    $stmt = $this->connect()->prepare('INSERT INTO user_cip (user_id, total_cip, ay_id, semester) SELECT * FROM (SELECT ? AS id, ? AS points, ? AS year, ? AS sem) AS tmp WHERE NOT EXISTS (SELECT * FROM user_cip WHERE user_id = ? AND ay_id = ? AND semester = ?) LIMIT 1;');

    if (!$stmt->execute([$userid, $cipoints, $year, $semester, $userid, $year, $semester])) {
      $stmt = null;
      header('location: ../view/userrequests.php?id=' . $userid . '&status=' . $status . '&error=stmt2failed');
      exit;
    };

    $stmt = null;
  }

  protected function udpateStatus($status, $id, $userid)
  {
    $stmt = $this->connect()->prepare('UPDATE user_request SET request_status = ? WHERE request_id = ?;');

    if (!$stmt->execute(['approved', $id])) {
      $stmt = null;
      header('location: ../view/userrequests.php?id=' . $userid . '&status=' . $status . '&error=stmt3failed');
      exit;
    };

    $stmt = null;
  }
}

class RejectUserRequest extends Dbh
{
  protected function reject($status, $id, $userid)
  {
    $stmt = $this->connect()->prepare('UPDATE user_request SET request_status = ? WHERE request_id = ?');

    if (!$stmt->execute(['rejected', $id])) {
      $stmt = null;
      header('location: ../view/userrequests.php?id=' . $userid . '&status=' . $status . '&error=stmtfailed');
      exit;
    };

    $stmt = null;
  }
}
