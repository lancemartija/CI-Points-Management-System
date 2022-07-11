<?php
$data = [
  'title' => 'User Dashboard',
  'dir' => '../../'
];

session_start();

if (!isset($_SESSION['userid'])) {
  header('Location: ../../index.php');
  exit;
}

include_once '../pages/dashboard/classes.php';
include_once '../layouts/header.php';
include_once '../layouts/navbar.php';
?>
<div class="flex pt-16 overflow-hidden bg-white">
  <?php
  include_once '../layouts/sidebar.php';
  include_once '../pages/dashboard/main.php';
  include_once '../layouts/footer.php';
  ?>
</div>