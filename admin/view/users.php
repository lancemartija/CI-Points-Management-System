<?php
$data = [
  'title' => 'Users',
  'dir' => '../../',
  'modal' => 'usermodal'
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

class DisplayUsers extends Dbh
{
  public function getCount()
  {
    $stmt = $this->connect()->prepare('SELECT COUNT(user_id) AS total FROM user;');

    if (!$stmt->execute()) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getUser($start_from, $results_per_page)
  {
    $sql = 'SELECT * FROM user LIMIT ' . $start_from . ', ' . $results_per_page . ';';
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute()) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getUserSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM user WHERE first_name = ? OR middle_name = ? OR last_name = ? OR department = ? OR status = ?;');
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

$user = new DisplayUsers();
$records = $user->getUser($start_from, $results_per_page);
$count = $user->getCount();
$total_pages = ceil($count[0]['total'] / $results_per_page);

include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
include_once '../layouts/sidebar.php';
include_once '../pages/users/main.php';
include_once '../layouts/footer.php';
