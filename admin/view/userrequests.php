<?php
$data = [
  'title' => 'CIP Requests',
  'dir' => '../../',
  'modal' => 'userrequestmodal'
];

session_start();

if (!isset($_SESSION['userid']) && !isset($_GET['id'])) {
  header('Location: ../../index.php');
  exit;
}

include_once '../database/database.php';

class DisplayData extends Dbh
{
  public function getUserData($id)
  {
    $stmt = $this->connect()->prepare('SELECT ur.request_id, ur.supporting_docs_name, ur.supporting_docs, ur.supporting_docs, ur.rendered_hours, ur.date_requested, ur.request_status, ci.title, ci.date, ci.type, ci.description, ci.ci_points, ci.semester, ci.ay_id, u.user_id, u.first_name, u.middle_name, u.last_name, u.email FROM user_request ur INNER JOIN ci_activity ci ON ur.activity_id = ci.activity_id AND ur.user_id = ? INNER JOIN user u  ON ur.user_id = u.user_id;');
    $result = 0;

    if (!$stmt->execute([$id])) {
      $stmt = null;
      exit;
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      return $result;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }

  public function getFilteredData($id, $status)
  {
    $stmt = $this->connect()->prepare('SELECT ur.request_id, ur.supporting_docs_name, ur.supporting_docs, ur.supporting_docs, ur.rendered_hours, ur.date_requested, ur.request_status, ci.title, ci.date, ci.type, ci.description, ci.ci_points, ci.semester, ci.ay_id, u.user_id, u.first_name, u.middle_name, u.last_name, u.email FROM user_request ur INNER JOIN ci_activity ci ON ur.activity_id = ci.activity_id AND ur.user_id = ? AND ur.request_status = ? INNER JOIN user u ON ur.user_id = u.user_id;');
    $result = 0;

    if (!$stmt->execute([$id, $status])) {
      $stmt = null;
      exit;
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      return $result;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }

  public function getSearchData($id, $status, $query)
  {
    $stmt = $this->connect()->prepare('SELECT ur.request_id, ur.supporting_docs_name, ur.supporting_docs, ur.supporting_docs, ur.rendered_hours, ur.date_requested, ur.request_status, ci.title, ci.date, ci.type, ci.description, ci.ci_points, ci.semester, ci.ay_id, u.user_id, u.first_name, u.middle_name, u.last_name, u.email FROM user_request ur INNER JOIN ci_activity ci ON ur.activity_id = ci.activity_id AND ur.user_id = ? OR ur.request_status = ? INNER JOIN user u ON ur.user_id = u.user_id WHERE ci.title = ? OR ur.request_status = ?;');
    $result = 0;

    if (!$stmt->execute([$id, $status, $query, $query])) {
      $stmt = null;
      exit;
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      return $result;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }
}

$display = new DisplayData();

if (!isset($_GET['status'])) {
  $records = $display->getUserData($_GET['id']);
} else {
  $records = $display->getFilteredData($_GET['id'], $_GET['status']);
}

include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
include_once '../layouts/sidebar.php';
include_once '../pages/userrequests/main.php';
include_once '../layouts/footer.php';
