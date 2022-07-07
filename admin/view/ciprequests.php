<?php
$data = [
  'title' => 'CIP Requests',
  'dir' => '../../'
];

session_start();

if (!isset($_SESSION['userid'])) {
  header('Location: ../../index.php');
  exit;
}

include_once '../database/database.php';

class DisplayData extends Dbh
{
  public function getUserRequest()
  {
    $sql = 'SELECT u.user_id, u.first_name, u.middle_name, u.last_name, ur.request_status, COUNT(ur.activity_id) FROM user_request ur LEFT JOIN user u ON ur.user_id = u.user_id GROUP BY ur.user_id ORDER BY u.last_name DESC;';
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
    $stmt = $this->connect()->prepare('SELECT u.user_id, u.first_name, u.middle_name, u.last_name, ur.request_status, COUNT(ur.activity_id) FROM user_request ur LEFT JOIN user u ON ur.user_id = u.user_id WHERE u.first_name = ? OR u.last_name = ? GROUP BY ur.user_id ORDER BY u.last_name DESC;');
    $result = 0;

    if (!$stmt->execute([$query, $query])) {
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

  public function getFilteredData($query)
  {
    $stmt = $this->connect()->prepare('SELECT u.user_id, u.first_name, u.middle_name, u.last_name, ur.request_status, COUNT(ur.activity_id) FROM user_request ur LEFT JOIN user u ON ur.user_id = u.user_id WHERE ur.request_status = ? GROUP BY ur.user_id ORDER BY u.last_name DESC;');
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


$display = new DisplayData();
$records = $display->getUserRequest();

include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
include_once '../layouts/sidebar.php';
include_once '../pages/ciprequests/main.php';
include_once '../layouts/footer.php';
