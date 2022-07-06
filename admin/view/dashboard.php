<?php
$data = [
  'title' => 'Dashboard',
  'dir' => '../../'
];

session_start();

if (!isset($_SESSION['userid'])) {
  header('Location: ../../index.php');
  exit;
}

include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
include_once '../layouts/sidebar.php';
// include_once '../layouts/main.php';
include_once '../layouts/footer.php';
