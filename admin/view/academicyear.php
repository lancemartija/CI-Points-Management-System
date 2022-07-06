<?php
$data = [
  'title' => 'Academic Year',
  'dir' => '../../',
  'modal' => 'yearmodal'
];

session_start();

if (!isset($_SESSION['userid'])) {
  header('Location: ../../index.php');
  exit;
}

include_once '../database/database.php';

class DisplayYear extends Dbh
{
  public function getYear()
  {
    $sql = 'SELECT * FROM academic_year;';
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute()) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getSearchData($query)
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

$display = new DisplayYear();
$records = $display->getYear();

include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
include_once '../layouts/sidebar.php';
include_once '../pages/academicyear/main.php';
include_once '../layouts/footer.php';
