<?php
$data = [
    'title' => 'CI Activities',
    'dir' => '../../',
    'modal' => 'ciactivitiesmodal'
];

session_start();

if (!isset($_SESSION['userid'])) {
    header('Location: ../../index.php');
    exit;
}

include_once '../database/database.php';

class DisplayActivity extends Dbh
{
    public function getActivity()
    {
        $sql = 'SELECT DISTINCT ci.activity_id, ci.title, ci.date, ci.venue, ci.department, ci.division, ci.description, ci.type, ci.duration, ci.ci_points, ci.semester, ay.ay_id, ay.year, u.user_id, u.first_name, u.middle_name, u.last_name FROM ci_activity ci LEFT JOIN user u ON ci.user_id = u.user_id LEFT JOIN academic_year ay ON ci.ay_id = ay.ay_id;';
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
        $stmt = $this->connect()->prepare('SELECT * FROM ci_activity WHERE title = ? OR department = ? OR type = ?;');
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


$display = new DisplayActivity();
$records = $display->getActivity();

include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
include_once '../layouts/sidebar.php';
include_once '../pages/ciactivity/main.php';
include_once '../layouts/footer.php';
