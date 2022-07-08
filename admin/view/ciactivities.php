<?php
$data = [
    'title' => 'CI Activities',
    'dir' => '../../',
    'modal' => 'ciactivitiesmodal'
];

$results_per_page = 20;

if (isset($_GET["page"])) {
    $page  = $_GET["page"];
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

class DisplayActivity extends Dbh
{
    public function getCount()
    {
        $stmt = $this->connect()->prepare('SELECT COUNT(activity_id) AS total FROM ci_activity;');

        if (!$stmt->execute()) {
            $stmt = null;
            exit;
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getActivity($start_from, $results_per_page)
    {
        $stmt = $this->connect()->prepare('SELECT DISTINCT ci.activity_id, ci.title, ci.date, ci.venue, ci.department, ci.division, ci.description, ci.type, ci.duration, ci.ci_points, ci.semester, ay.ay_id, ay.year, u.user_id, u.first_name, u.middle_name, u.last_name FROM ci_activity ci LEFT JOIN user u ON ci.user_id = u.user_id LEFT JOIN academic_year ay ON ci.ay_id = ay.ay_id LIMIT ' . $start_from . ', ' . $results_per_page . ';');

        if (!$stmt->execute()) {
            $stmt = null;
            exit;
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getActivitySearchData($query)
    {
        $stmt = $this->connect()->prepare('SELECT DISTINCT ci.activity_id, ci.title, ci.date, ci.venue, ci.department, ci.division, ci.description, ci.type, ci.duration, ci.ci_points, ci.semester, ay.ay_id, ay.year, u.user_id, u.first_name, u.middle_name, u.last_name FROM ci_activity ci LEFT JOIN user u ON ci.user_id = u.user_id LEFT JOIN academic_year ay ON ci.ay_id = ay.ay_id WHERE ci.title = ? OR ci.department = ? OR ci.type = ?;');
        $result = 0;

        if (!$stmt->execute([$query, $query, $query])) {
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

$activity = new DisplayActivity();
$records = $activity->getActivity($start_from, $results_per_page);
$count = $activity->getCount();
$total_pages = ceil($count[0]['total'] / $results_per_page);

include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
include_once '../layouts/sidebar.php';
include_once '../pages/ciactivity/main.php';
include_once '../layouts/footer.php';
