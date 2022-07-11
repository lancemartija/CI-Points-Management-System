<?php

include_once '../database/database.php';

class UserProfile extends Dbh
{
  public function getUserProfileInfo($userid)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM user WHERE user_id = ?;');

    if (!$stmt->execute([$userid])) {
      $stmt = null;
      exit;
    }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}

$userprofile = new UserProfile();
$userInfo = $userprofile->getUserProfileInfo($_SESSION['userid']);
