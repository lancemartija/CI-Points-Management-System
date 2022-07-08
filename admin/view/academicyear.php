<?php
$data = [
  'title' => 'Academic Year',
  'dir' => '../../',
  'modal' => 'yearmodal'
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

class DisplayYear extends Dbh
{
  public function getYearCount()
  {
    $stmt = $this->connect()->prepare('SELECT COUNT(ay_id) AS total FROM academic_year;');

    if (!$stmt->execute()) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getYear($start_from, $results_per_page)
  {
    $sql = 'SELECT * FROM academic_year ORDER BY year + 0 LIMIT ' . $start_from . ', ' . $results_per_page . ';';
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute()) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getYearSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM academic_year WHERE year = ?;');
    $result = 0;

    if (!$stmt->execute([$query])) {
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

$year = new DisplayYear();
$records = $year->getYear($start_from, $results_per_page);
$count = $year->getYearCount();
$total_pages = ceil($count[0]['total'] / $results_per_page);

include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
include_once '../layouts/sidebar.php';
include_once '../pages/academicyear/main.php';
include_once '../layouts/footer.php';
