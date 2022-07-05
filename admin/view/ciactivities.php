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

class DisplayUsers extends Dbh
{
    public function getUser()
    {
        $sql = 'SELECT * FROM ci_activity;';
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


$display = new DisplayUsers();
$records = $display->getUser();

require_once('../layouts/header.php');
require_once('../layouts/navbar.php');
require_once('../layouts/sidebar.php');
require_once('../pages/ciactivity/main.php');
require_once('../layouts/footer.php');
