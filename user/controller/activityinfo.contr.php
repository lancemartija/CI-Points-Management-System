<?php

class SubmitRequestContr extends SubmitRequest
{
  private $userid;
  private $hours;
  private $id;
  private $filesize;
  private $filename;
  private $filetype;
  private $filedata;

  public function __construct($userid, $hours, $id, $filesize, $filename, $filetype, $filedata)
  {
    $this->userid = $userid;
    $this->hours = $hours;
    $this->id = $id;
    $this->filesize = $filesize;
    $this->filename = $filename;
    $this->filetype = $filetype;
    $this->filedata = $filedata;
  }

  public function submitRequest()
  {
    if ($this->emptyInput() == false) {
      header('location: ../view/activityinfo.php?id=' . $this->id . '&error=emptyinput');
      exit;
    }

    if ($this->VerifyFile() == false) {
      header('location: ../view/activityinfo.php?id=' . $this->id . '&error=filetypeerror');
      exit;
    }

    if ($this->SizeFile() == false) {
      header('location: ../view/activityinfo.php?id=' . $this->id . '&error=filesizeerror');
      exit;
    }

    $this->setRequest($this->userid, $this->hours, $this->id, $this->filename, $this->filetype, $this->filedata);
  }

  private function emptyInput()
  {
    if (empty($this->hours) || empty($this->filename) || empty($this->filetype) || empty($this->filedata)) {
      return false;
    }

    return true;
  }

  private function VerifyFile()
  {
    if ($this->filetype === 'image/png' || $this->filetype === 'application/pdf' || $this->filetype === 'image/jpeg' || $this->filetype === 'text/plain' || $this->filetype === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $this->filetype === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || $this->filetype === 'text/csv') {
      return true;
    }
    return false;
  }

  private function SizeFile()
  {
    if ($this->fileSize < 3000000) {
      return true;
    }
    return false;
  }
}
