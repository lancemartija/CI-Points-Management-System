<?php

class AddUserContr extends AddUser
{
    private $fname;
    private $mname;
    private $lname;
    private $address;
    private $email;
    private $password;
    private $passwordRepeat;
    private $contact;
    private $department;
    private $division;
    private $status;

    public function __construct($fname, $mname, $lname, $address, $email, $password, $passwordRepeat, $contact, $department, $division, $status)
    {
        $this->fname = $fname;
        $this->mname = $mname;
        $this->lname = $lname;
        $this->address = $address;
        $this->email = $email;
        $this->password = $password;
        $this->passwordRepeat = $passwordRepeat;
        $this->contact = $contact;
        $this->department = $department;
        $this->division = $division;
        $this->status = $status;
    }

    public function addUser()
    {
        if ($this->Isempty() == false) {
            header("Location: ../view/addUser.php?error=emptyinput");
            exit;
        }

        if ($this->invalidEmail() == false) {
            header("Location: ../view/addUser.php?error=InvalidEmail");
            exit;
        }

        if ($this->pwdMatch() == false) {
            header("Location: ../view/addUser.php?error=PwdnotMatch");
            exit;
        }
        if ($this->emailTakenCheck() == false) {
            header("Location: ../view/addUser.php?error=EmailTaken");
            exit;
        }

        if ($this->StrongPwd() == false) {
            header("Location: ../view/addUser.php?error=WeakPassword");
            exit;
        }

        $this->setUser($this->fname, $this->mname, $this->lname, $this->address, $this->email, $this->password, $this->contact, $this->department, $this->division, $this->status);
    }

    private function Isempty()
    {
        if (empty($this->fname) || empty($this->mname) || empty($this->lname) || empty($this->address) || empty($this->email) || empty($this->password) || empty($this->passwordRepeat) || empty($this->contact) || empty($this->department) || empty($this->division) || empty($this->status)) {
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
        if ($this->password !== $this->passwordRepeat) {
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
        if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $this->password)) {
            return false;
        }

        return true;
    }
}



class EditUserContr extends EditUser
{
    private $id;
    private $fname;
    private $mname;
    private $lname;
    private $address;
    private $email;
    private $contact;
    private $department;
    private $division;
    private $status;

    public function __construct($id, $fname, $mname, $lname, $address, $email, $contact, $department, $division, $status)
    {
        $this->id = $id;
        $this->fname = $fname;
        $this->mname = $mname;
        $this->lname = $lname;
        $this->address = $address;
        $this->email = $email;
        $this->contact = $contact;
        $this->department = $department;
        $this->division = $division;
        $this->status = $status;
    }

    public function edit()
    {
        if ($this->Isempty() == false) {
            header("Location: ../view/addUser.php?error=emptyinput");
            exit;
        }

        if ($this->invalidEmail() == false) {
            header("Location: ../view/addUser.php?error=InvalidEmail");
            exit;
        }

        $this->editUser($this->id, $this->fname, $this->mname, $this->lname, $this->address, $this->email, $this->contact, $this->department, $this->division, $this->status);
    }
    private function Isempty()
    {
        if (empty($this->id) || empty($this->fname) || empty($this->mname) || empty($this->lname) || empty($this->address) || empty($this->email || empty($this->contact) || empty($this->department) || empty($this->division) || empty($this->status))) {
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
}
