<?php
$data = [
    'title' => 'user',
    'dir' => '../../'
];

session_start();

if (!isset($_SESSION['userid'])) {
    header('Location: ../../index.php');
    exit;
}



// require_once('../layouts/header.php');
// require_once('../layouts/navbar.php');
// require_once('../layouts/sidebar.php');

// require_once('../layouts/main.php');
require_once('../layouts/footer.php');

include '../database/database.php';
include '../model/display-data.model.php';

$display = new DisplayUsers();
$records = $display->getUser();

foreach ($records as $data) {
    echo $data['first_name'] . ' ' . $data['last_name'] . ' ' .  $data['middle_name'] . ' ' . $data['email'] . ' ' . $data['address'] . '</br>';
}

?>

<a href="../view/addUser.php">Add</a>