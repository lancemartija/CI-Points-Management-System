<?php

class RegisterContr extends Register
{
  private $email;
  private $pwd;
  private $confirm_pwd;

  public function __construct($email, $pwd, $confirm_pwd)
  {
    $this->email = $email;
    $this->pwd = $pwd;
    $this->confirm_pwd = $confirm_pwd;
  }

  public function registerUser()
  {
    if ($this->emptyInput() == false) {
      header("Location: ../register.php?error=emptyinput");
      exit;
    }

    if ($this->invalidEmail() == false) {
      header("Location: ../register.php?error=invalidemail");
      exit;
    }

    if ($this->StrongPwd() == false) {
      header("Location: ../register.php?error=weakpassword");
      exit;
    }

    if ($this->pwdMatch() == false) {
      header("Location: ../register.php?error=passwordnotmatched");
      exit;
    }

    if ($this->emailTakenCheck() == false) {
      header("Location: ../register.php?error=emailalreadytaken");
      exit;
    }

    $this->setUsers($this->email, $this->pwd);

    $this->getUser($this->email, $this->pwd);
  }

  private function emptyInput()
  {
    if (empty($this->email) || empty($this->pwd) || empty($this->confirm_pwd)) {
      return false;
    }

    return true;
  }

  private function invalidEmail()
  {
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      return false;
    }

    return true;
  }

  private function pwdMatch()
  {
    if ($this->pwd !== $this->confirm_pwd) {
      return false;
    }

    return true;
  }

  private function emailTakenCheck()
  {
    if (!$this->checkUser($this->email)) {
      return false;
    }

    return true;
  }

  private function StrongPwd()
  {
    if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $this->pwd)) {
      return false;
    }

    return true;
  }
}
