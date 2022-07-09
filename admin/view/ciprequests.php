<?php
$data = [
  'title' => 'CIP Requests',
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

class DisplayUserRequestData extends Dbh
{
  public function getCardCount()
  {
    $stmt = $this->connect()->prepare('WITH record AS (SELECT * FROM user_request GROUP BY user_id) SELECT COUNT(*) AS total FROM record;');

    if (!$stmt->execute()) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getFilteredCardCount($status)
  {
    $stmt = $this->connect()->prepare('WITH record AS (SELECT * FROM user_request WHERE request_status = ? GROUP BY user_id) SELECT COUNT(*) AS total FROM record;');

    if (!$stmt->execute([$status])) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getUserRequest($start_from, $results_per_page)
  {
    $sql = 'SELECT u.user_id, u.first_name, u.middle_name, u.last_name, ur.request_status, COUNT(ur.activity_id) AS total FROM user_request ur LEFT JOIN user u ON ur.user_id = u.user_id GROUP BY ur.user_id ORDER BY u.last_name DESC LIMIT ' . $start_from . ', ' . $results_per_page . ';';
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute()) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getCardSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT u.user_id, u.first_name, u.middle_name, u.last_name, ur.request_status, COUNT(ur.activity_id) AS total FROM user_request ur LEFT JOIN user u ON ur.user_id = u.user_id WHERE u.first_name = ? OR u.last_name = ? GROUP BY ur.user_id ORDER BY u.last_name DESC;');
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

  public function getFilteredCard($query, $start_from, $results_per_page)
  {
    $stmt = $this->connect()->prepare('SELECT u.user_id, u.first_name, u.middle_name, u.last_name, ur.request_status, COUNT(ur.activity_id) AS total FROM user_request ur LEFT JOIN user u ON ur.user_id = u.user_id WHERE ur.request_status = ? GROUP BY ur.user_id ORDER BY u.last_name DESC LIMIT ' . $start_from . ', ' . $results_per_page . ';');
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


$userrequest = new DisplayUserRequestData();

if (!isset($_GET['filter'])) {
  $records = $userrequest->getUserRequest($start_from, $results_per_page);
  $count = $userrequest->getCardCount();
  $total_pages = ceil($count[0]['total'] / $results_per_page);
} else {
  $records = $userrequest->getFilteredCard($_GET['filter'], $start_from, $results_per_page);
  $count = $userrequest->getFilteredCardCount($_GET['filter']);
  $total_pages = ceil($count[0]['total'] / $results_per_page);
}

include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
include_once '../layouts/sidebar.php';
include_once '../pages/ciprequests/main.php';
include_once '../layouts/footer.php';
