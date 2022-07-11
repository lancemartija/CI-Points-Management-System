<?php
$data = [
  'title' => 'CI Points',
  'dir' => '../../',
  'modal' => 'usercipointsmodal'
];

$results_per_page = 20;

if (isset($_GET['page'])) {
  $page  = $_GET['page'];
} else {
  $page = 1;
};

$start_from = ($page - 1) * $results_per_page;

session_start();

if (!isset($_SESSION['userid']) && !isset($_GET['id'])) {
  header('Location: ../../index.php');
  exit;
}

include_once '../database/database.php';

class UserCIPData extends Dbh
{
  public function getUserCIPCount($id)
  {
    $stmt = $this->connect()->prepare('SELECT COUNT(request_id) AS total FROM user_request WHERE user_id = ?;');

    if (!$stmt->execute([$id])) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getFilteredUserCIPCount($id, $status)
  {
    $stmt = $this->connect()->prepare('SELECT COUNT(request_id) AS total FROM user_request WHERE user_id = ? AND request_status = ?;');

    if (!$stmt->execute([$id, $status])) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getUserCIPData($id, $start_from, $results_per_page)
  {
    $stmt = $this->connect()->prepare('SELECT ur.request_id, ur.supporting_docs_name, ur.supporting_docs, ur.supporting_docs, ur.rendered_hours, ur.date_requested, ur.request_status, ci.title, ci.date, ci.type, ci.description, ci.ci_points, ci.semester, ci.ay_id, u.user_id, u.first_name, u.middle_name, u.last_name, u.email, u.department, u.division, u.status FROM user_request ur INNER JOIN ci_activity ci ON ur.activity_id = ci.activity_id AND ur.user_id = ? INNER JOIN user u  ON ur.user_id = u.user_id LIMIT ' . $start_from . ', ' . $results_per_page . ';');
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

  public function getFilteredUserCIPData($id, $status, $start_from, $results_per_page)
  {
    $stmt = $this->connect()->prepare('SELECT ur.request_id, ur.supporting_docs_name, ur.supporting_docs, ur.supporting_docs, ur.rendered_hours, ur.date_requested, ur.request_status, ci.title, ci.date, ci.type, ci.description, ci.ci_points, ci.semester, ci.ay_id, u.user_id, u.first_name, u.middle_name, u.last_name, u.email, u.department, u.division, u.status FROM user_request ur INNER JOIN ci_activity ci ON ur.activity_id = ci.activity_id AND ur.user_id = ? AND ur.request_status = ? INNER JOIN user u ON ur.user_id = u.user_id LIMIT ' . $start_from . ', ' . $results_per_page . ';');
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

  public function getUserCIPSearchData($id, $status, $query, $start_from, $results_per_page)
  {
    $stmt = $this->connect()->prepare('SELECT ur.request_id, ur.supporting_docs_name, ur.supporting_docs, ur.supporting_docs, ur.rendered_hours, ur.date_requested, ur.request_status, ci.title, ci.date, ci.type, ci.description, ci.ci_points, ci.semester, ci.ay_id, u.user_id, u.first_name, u.middle_name, u.last_name, u.email, u.department, u.division, u.status FROM user_request ur INNER JOIN ci_activity ci ON ur.activity_id = ci.activity_id AND ur.user_id = ? OR ur.request_status = ? INNER JOIN user u ON ur.user_id = u.user_id WHERE ci.title = ? OR ur.request_status = ? LIMIT ' . $start_from . ', ' . $results_per_page . ';');
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

  public function getCIPoints($id)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM user_cip cip INNER JOIN academic_year ay ON cip.ay_id = ay.ay_id WHERE cip.user_id = ?;');

    if (!$stmt->execute([$id])) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}

$usercip = new UserCIPData();
$cip = $usercip->getCIPoints($_GET['id']);

if (!isset($_GET['status'])) {
  $records = $usercip->getUserCIPData($_GET['id'], $start_from, $results_per_page);
  $count = $usercip->getUserCIPCount($_GET['id']);
  $total_pages = ceil($count[0]['total'] / $results_per_page);
} else {
  $records = $usercip->getFilteredUserCIPData($_GET['id'], $_GET['status'], $start_from, $results_per_page);
  $count = $usercip->getFilteredUserCIPCount($_GET['id'], $_GET['status']);
  $total_pages = ceil($count[0]['total'] / $results_per_page);
}

if (empty($records)) {
  header('Location: ../view/usercipoints.php');
  exit;
}

include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
include_once '../layouts/sidebar.php';
include_once '../pages/usercipoints/main.php';
include_once '../layouts/footer.php';
