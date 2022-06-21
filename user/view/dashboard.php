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

?>

<h1>User Dashboard</h1>
<a href="../includes/logout.inc.php">log out</a>