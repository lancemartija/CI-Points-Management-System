<?php

class ApproveCIPRequestContr extends ApproveCIPRequest
{
  private $filter;
  private $id;
  private $userid;
  private $cipoints;
  private $year;
  private $semester;

  public function __construct($filter, $id, $userid, $cipoints, $year, $semester)
  {
    $this->filter = $filter;
    $this->id = $id;
    $this->userid = $userid;
    $this->cipoints = $cipoints;
    $this->year = $year;
    $this->semester = $semester;
  }

  public function approveCIPRequest()
  {
    if ($this->isEmpty() == false) {
      header('location: ../view/usercipoints.php?id=' . $this->userid . '&filter=' . $this->filter . '&error=stmtfailed');
      exit;
    }

    $this->approveCIP($this->filter, $this->userid, $this->cipoints, $this->year, $this->semester);
    $this->insertDataCIP($this->filter, $this->userid, $this->cipoints, $this->year, $this->semester);
    $this->udpateStatusCIP($this->filter, $this->id, $this->userid);
  }


  private function isEmpty()
  {
    if (empty($this->id) ||  empty($this->userid) || empty($this->cipoints) || empty($this->year) || empty($this->semester)) {
      return false;
    }

    return true;
  }
}


class RejectCIPRequestContr extends RejectCIPRequest
{
  private $filter;
  private $id;
  private $userid;

  public function __construct($filter, $id, $userid)
  {
    $this->filter = $filter;
    $this->id = $id;
    $this->userid = $userid;
  }

  public function rejectCIPRequest()
  {
    if ($this->isEmpty() == false) {
      header('location: ../view/usercipoints.php?id=' . $this->userid . '&filter=' . $this->filter . '&error=stmtfailed');
      exit;
    }

    $this->rejectCIP($this->filter, $this->id, $this->userid);
  }


  private function isEmpty()
  {
    if (empty($this->id) || empty($this->userid)) {
      return false;
    }

    return true;
  }
}
