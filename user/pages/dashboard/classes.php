<?php

include_once '../database/database.php';

class UserProfile extends Dbh
{
  public function getUserProfileInfo($userid)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM user u LEFT JOIN user_cip cip ON u.user_id = cip.user_id LEFT JOIN academic_year ay ON cip.ay_id = ay.ay_id WHERE u.user_id = ?;');

    if (!$stmt->execute([$userid])) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getActivityInfo()
  {
    $stmt = $this->connect()->prepare('SELECT * FROM ci_activity LIMIT 5;');

    if (!$stmt->execute()) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getRequestsInfo($status, $userid)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM user_request ur INNER JOIN ci_activity ci ON ur.activity_id = ci.activity_id AND ur.request_status = ? WHERE ur.user_id = ? ORDER BY ur.date_requested + 0 LIMIT 5;');

    if (!$stmt->execute([$status, $userid])) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}

$userprofile = new UserProfile();
$userInfo = $userprofile->getUserProfileInfo($_SESSION['userid']);
$activityInfo = $userprofile->getActivityInfo();
$requestInfoPending = $userprofile->getRequestsInfo('pending', $_SESSION['userid']);
$requestInfoApproved = $userprofile->getRequestsInfo('approved', $_SESSION['userid']);
$requestInfoRejected = $userprofile->getRequestsInfo('rejected', $_SESSION['userid']);
