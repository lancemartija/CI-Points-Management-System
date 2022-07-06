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

<h1>Welcome <?php echo $_SESSION['fname']; ?></h1>
<h1><?php echo $_SESSION['userid']; ?></h1>
<a href="../includes/logout.inc.php">sign out</a><br>
<a href="ci_activity.php?id=<?php echo $_SESSION['userid']; ?>"> CI Activity</a>