<?php
$data = [
    'title' => 'CI_Activities',
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
?>

<a href="Create_activity.php">Create Activity</a>