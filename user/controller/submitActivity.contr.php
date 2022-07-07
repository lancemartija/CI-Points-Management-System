<?php

class SubmitContr extends submit
{
  private $userID;
  private $numberHrs;
  private $actID;
  private $fileName;
  private $fileType;
  private $fileData;

  public function __construct($userID, $actID, $fileName, $fileType, $fileData, $numberHrs)
  {
    $this->userID = $userID;
    $this->actID = $actID;
    $this->fileName = $fileName;
    $this->fileType = $fileType;
    $this->fileData = $fileData;
    $this->numberHrs = $numberHrs;
  }

  public function submitAct()
  {
    if ($this->emptyInput() == false) {
      header("location: ../view/dashboard.php?error=emptyinput");
      exit;
    }

    if ($this->VerifyFile() == false) {
      header("location: ../view/ci_activity.php?id=$this->userID&userid=$this->userID&error=filetype_error");
      exit;
    }

    $this->setSubmit($this->userID, $this->actID, $this->fileName, $this->fileType, $this->fileData, $this->numberHrs);
  }



  private function emptyInput()
  {
    if (empty($this->numberHrs) || empty($this->fileName) || empty($this->fileType) || empty($this->fileData)) {
      return false;
    }

    return true;
  }

  private function VerifyFile()
  {
    if ($this->fileType === 'image/png' || $this->fileType === 'application/pdf' || $this->fileType === 'image/jpeg') {
      return true;
    }
    return false;
  }
}
