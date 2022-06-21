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

require_once("../layouts/header.php");
?>

<h1>dashboard</h1>

<?php require_once("../layouts/footer.php"); ?>