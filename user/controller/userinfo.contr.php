<?php

class UserInfoContr extends UserInfo
{
  private $id;
  private $fname;
  private $mname;
  private $lname;
  private $address;
  private $num;
  private $dept;
  private $div;

  public function __construct($id, $fname, $mname, $lname, $address, $num, $dept, $div)
  {
    $this->id = $id;
    $this->fname = $fname;
    $this->mname = $mname;
    $this->lname = $lname;
    $this->address = $address;
    $this->num = $num;
    $this->dept = $dept;
    $this->div = $div;
  }

  public function addUserInfo()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/userinfo.php?error=emptyinput');
      exit;
    }

    $this->setUserInfo($this->id, $this->fname, $this->mname, $this->lname, $this->address, $this->dept, $this->div, $this->num);
  }

  private function emptyInput()
  {
    if (empty($this->fname) || empty($this->mname) || empty($this->lname) || empty($this->address) || empty($this->num) || empty($this->dept) || empty($this->div)) {
      return false;
    }
    return true;
  }
}
