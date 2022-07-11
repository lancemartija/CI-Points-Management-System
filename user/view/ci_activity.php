<?php

session_start();

if (!isset($_SESSION['userid'])) {
  header('Location: ../../index.php');
  exit;
}

include '../database/database.php';

class Display extends Dbh
{
  public function getActivity()
  {
    $sql = 'SELECT * FROM ci_activity;';
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute()) {;
      $stmt = null;
      echo "error";
      exit;
    }

    $result = $stmt->fetchAll((PDO::FETCH_ASSOC));
    return $result;
  }


  public function getUser($id)
  {
    $sql = 'SELECT * FROM user where user_id = ?';
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute([$id])) {;
      $stmt = null;
      echo "error";
      exit;
    }

    $result = $stmt->fetchAll((PDO::FETCH_ASSOC));
    return $result;
  }
}

$display = new Display();
$records = $display->getActivity();
$user = $display->getUser($_SESSION['userid']);

?>

<table>
  <tr>
    <th>Activity Category</th>
    <th>Activity Title</th>
    <th>Activity Date</th>
    <th>Activity Venue</th>
    <th>Activity Duration</th>
    <th>Activity Description</th>
    <th>Activity CI Points Max Value</th>
    <th></th>
  </tr>
  <?php foreach ($records as $data) {
    foreach ($user as $User) { ?>
      <tr>
        <td><?php echo $data['type']; ?></td>
        <td><?php echo $data['title']; ?></td>
        <td><?php echo $data['date']; ?></td>
        <td><?php echo $data['venue']; ?></td>
        <td><?php echo $data['duration']; ?></td>
        <td><?php echo $data['description']; ?></td>
        <td><?php echo $data['ci_points']; ?></td>
        <td><button type="submit" onclick="location.href='../view/submitActivity.php?id=<?php echo $data['activity_id'] ?>&userid=<?php echo $User['user_id']; ?>'">Submit Documents</button></td>

      </tr>
  <?php }
  } ?>
</table>
<button type="button" onclick="location.href='../view/dashboard.php'">Back</button>
<?php



?>


<!-- 
<form action="" method="GET">
    <input type="text" name="name">


    <input type="text" name="lname">
    <button type="submit">submit</button>
</form> -->