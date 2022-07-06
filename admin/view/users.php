<?php
$data = [
    'title' => 'Users',
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
        $sql = 'SELECT * FROM user;';
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


$display = new DisplayUsers();
$records = $display->getUser();

include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
include_once '../layouts/sidebar.php';
include_once '../pages/users/main.php';
include_once '../layouts/footer.php';
