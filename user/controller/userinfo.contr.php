<?php

class UserInfoContr extends UserInfo
{
  private $id;
  private $fname;
  private $mname;
  private $lname;
  private $address;
  private $num;

  public function __construct($id, $fname, $mname, $lname, $address, $num)
  {
    $this->id = $id;
    $this->fname = $fname;
    $this->mname = $mname;
    $this->lname = $lname;
    $this->address = $address;
    $this->num = $num;
  }

  public function addUserInfo()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/userinfo.php?error=emptyinput');
      exit;
    }

    $this->setUserInfo($this->id, $this->fname, $this->mname, $this->lname, $this->address, $this->num);
  }

  private function emptyInput()
  {
    if (empty($this->fname) || empty($this->mname) || empty($this->lname) || empty($this->address) || empty($this->num)) {
      return false;
    }
    return true;
  }
}
