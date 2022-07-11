<?php
$data = [
  'title' => 'Reports',
  'dir' => '../../'
];

$results_per_page = 20;

if (isset($_GET['page'])) {
  $page  = $_GET['page'];
} else {
  $page = 1;
};

$start_from = ($page - 1) * $results_per_page;

session_start();

if (!isset($_SESSION['userid'])) {
  header('Location: ../../index.php');
  exit;
}

include_once '../database/database.php';

class DisplayReports extends Dbh
{
  public function getUserReportInfo($start_from, $results_per_page)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM user u LEFT JOIN user_cip cip ON u.user_id = cip.user_id LEFT JOIN academic_year ay ON cip.ay_id = ay.ay_id ORDER BY ay.year + 0, cip.total_cip + 0 LIMIT ' . $start_from . ', ' . $results_per_page . ';');

    if (!$stmt->execute()) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getReportCountInfo()
  {
    $stmt = $this->connect()->prepare('SELECT COUNT(u.user_id) AS total FROM user u LEFT JOIN user_cip cip ON u.user_id = cip.user_id LEFT JOIN academic_year ay ON cip.ay_id = ay.ay_id ORDER BY ay.year + 0, cip.total_cip + 0 LIMIT 5;');

    if (!$stmt->execute()) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getReportSearchData($query, $start_from, $results_per_page)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM user u LEFT JOIN user_cip cip ON u.user_id = cip.user_id LEFT JOIN academic_year ay ON cip.ay_id = ay.ay_id WHERE u.first_name = ? OR u.middle_name = ? OR u.last_name = ? OR u.department = ? OR u.status = ? ORDER BY ay.year + 0, cip.total_cip + 0 LIMIT ' . $start_from . ', ' . $results_per_page . ';');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query, $query])) {
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

$reports = new DisplayReports();
$records = $reports->getUserReportInfo($start_from, $results_per_page);
$count = $reports->getReportCountInfo();
$total_pages = ceil($count[0]['total'] / $results_per_page);

include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
include_once '../layouts/sidebar.php';
include_once '../pages/reports/main.php';
include_once '../layouts/footer.php';
