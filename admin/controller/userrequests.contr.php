<?php

class ApproveUserRequestContr extends ApproveUserRequest
{
  private $status;
  private $id;
  private $userid;
  private $cipoints;
  private $year;
  private $semester;

  public function __construct($status, $id, $userid, $cipoints, $year, $semester)
  {
    $this->status = $status;
    $this->id = $id;
    $this->userid = $userid;
    $this->cipoints = $cipoints;
    $this->year = $year;
    $this->semester = $semester;
  }

  public function approveUserRequest()
  {
    if ($this->isEmpty() == false) {
      header('location: ../view/userrequests.php?id=' . $this->userid . '&status=' . $this->status . '&error=stmtfailed');
      exit;
    }

    $this->approve($this->status, $this->userid, $this->cipoints, $this->year, $this->semester);
    $this->insertData($this->status, $this->userid, $this->cipoints, $this->year, $this->semester);
    $this->udpateStatus($this->status, $this->id, $this->userid);
  }


  private function isEmpty()
  {
    if (empty($this->id) ||  empty($this->userid) || empty($this->cipoints) || empty($this->year) || empty($this->semester)) {
      return false;
    }

    return true;
  }
}


class RejectUserRequestContr extends RejectUserRequest
{
  private $status;
  private $id;
  private $userid;

  public function __construct($status, $id, $userid)
  {
    $this->status = $status;
    $this->id = $id;
    $this->userid = $userid;
  }

  public function rejectUserRequest()
  {
    if ($this->isEmpty() == false) {
      header('location: ../view/userrequests.php?id=' . $this->userid . '&status=' . $this->status . '&error=stmtfailed');
      exit;
    }

    $this->reject($this->status, $this->id, $this->userid);
  }


  private function isEmpty()
  {
    if (empty($this->id) || empty($this->userid)) {
      return false;
    }

    return true;
  }
}
