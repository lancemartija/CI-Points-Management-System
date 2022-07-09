<?php

include_once '../database/database.php';

class Display extends Dbh
{
  public function getUserCount()
  {
    $stmt = $this->connect()->prepare('SELECT COUNT(user_id) AS total FROM user;');

    if (!$stmt->execute()) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getActivityCount()
  {
    $stmt = $this->connect()->prepare('SELECT COUNT(activity_id) AS total FROM ci_activity;');

    if (!$stmt->execute()) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getPendingRequestCount($status)
  {
    $stmt = $this->connect()->prepare('SELECT COUNT(request_id) AS total FROM user_request WHERE request_status = ?;');

    if (!$stmt->execute([$status])) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getUserInfo()
  {
    $stmt = $this->connect()->prepare('SELECT * FROM user u LEFT JOIN user_cip cip ON u.user_id = cip.user_id ORDER BY total_cip + 0 LIMIT 5;');

    if (!$stmt->execute()) {
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

  public function getRequestsInfo($status)
  {
    $stmt = $this->connect()->prepare('SELECT ur.request_id, ur.supporting_docs_name, ur.supporting_docs, ur.supporting_docs, ur.rendered_hours, ur.date_requested, ur.request_status, ci.title, ci.date, ci.type, ci.description, ci.ci_points, ci.semester, ci.ay_id, u.user_id, u.first_name, u.middle_name, u.last_name, u.email FROM user_request ur INNER JOIN ci_activity ci ON ur.activity_id = ci.activity_id AND ur.request_status = ? INNER JOIN user u ON ur.user_id = u.user_id ORDER BY ur.date_requested + 0 LIMIT 5;');

    if (!$stmt->execute([$status])) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}

$display = new Display();
$userCount = $display->getUserCount();
$activityCount = $display->getActivityCount();
$requestCount = $display->getPendingRequestCount('pending');
$userInfo = $display->getUserInfo();
$activityInfo = $display->getActivityInfo();
$requestInfo = $display->getRequestsInfo('pending');
