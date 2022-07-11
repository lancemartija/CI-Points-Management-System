<?php
$data = [
  'title' => 'CI Activities',
  'dir' => '../../'
];

session_start();

if (!isset($_SESSION['userid'])) {
  header('Location: ../../index.php');
  exit;
}

include_once '../database/database.php';

class DisplayActivityInfo extends Dbh
{

  public function getActivity($id)
  {
    $stmt = $this->connect()->prepare('SELECT ci.activity_id, ci.title, ci.date, ci.venue, ci.department, ci.division, ci.description, ci.type, ci.duration, ci.ci_points, ci.semester, ci.date_created, ci.date_updated, ay.ay_id, ay.year, u.user_id, u.first_name, u.middle_name, u.last_name FROM ci_activity ci LEFT JOIN user u ON ci.user_id = u.user_id LEFT JOIN academic_year ay ON ci.ay_id = ay.ay_id WHERE ci.activity_id = ?;');

    if (!$stmt->execute([$id])) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}

$activityinfo = new DisplayActivityInfo();
$records = $activityinfo->getActivity($_GET['id']);

include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
include_once '../layouts/sidebar.php';
include_once '../pages/activityinfo/main.php';
include_once '../layouts/footer.php';
