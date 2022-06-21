<?php

class Register extends Dbh
{
  public function __construct()
  {
    $this->date = date('m/d/Y h:i:s a', time());
  }

  protected function setUsers($email, $pwd)
  {
    $stmt = $this->connect()->prepare('INSERT INTO user (email, password, date_created) VALUES (?, ?, ?);');
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    if (!$stmt->execute([$email, $hashedPwd, $this->date])) {
      $stmt = null;
      header("Location: ../register.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function getUser($email, $pwd)
  {
    $stmt = $this->connect()->prepare('SELECT password FROM user WHERE email = ?;');

    if (!$stmt->execute([$email])) {
      $stmt = null;
      header("Location: ../register.php?error=stmtfailed");
      exit;
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("Location: ../register.php?error=usernotfound");
      exit;
    }

    $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkedPwd = password_verify($pwd, $pwdHashed[0]['password']);

    if ($checkedPwd == false) {
      $stmt = null;
      header("Location: ../register.php?error=invalid");
      exit;
    } else {
      $pwd = $pwdHashed[0]['password'];
      $stmt = $this->connect()->prepare('SELECT * FROM user WHERE email = ? AND password = ?;');

      if (!$stmt->execute([$email, $pwd])) {
        $stmt = null;
        header("Location: ../register.php?error=stmtfailed");
        exit;
      }

      if ($stmt->rowCount() == 0) {
        $stmt = null;
        header("Location: ../register.php?error=usernotfound");
        exit;
      }

      $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

      session_start();

      $_SESSION['userid'] = $user[0]['user_id'];
    }

    $stmt = null;
  }

  protected function checkUser($email)
  {
    $stmt = $this->connect()->prepare('SELECT user_id FROM user WHERE email = ?;');
    $resultCheck = true;

    if (!$stmt->execute([$email])) {
      $stmt = null;
      header("Location: ../register.php?error=stmtfailed");
      exit;
    }

    if ($stmt->rowCount() > 0) {
      $resultCheck = false;
    }

    return $resultCheck;
  }
}
