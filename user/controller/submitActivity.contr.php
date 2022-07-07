<?php

class submitContr extends submit
{

    private $userID;
    private $numberHrs;
    private $actID;
    private $fileName;
    private $fileType;
    private $fileData;
    private $fileSize;


    public function __construct($userID, $actID, $fileName, $fileType, $fileData, $numberHrs, $fileSize)
    {
        $this->userID = $userID;
        $this->actID = $actID;
        $this->fileName = $fileName;
        $this->fileType = $fileType;
        $this->fileData = $fileData;
        $this->numberHrs = $numberHrs;
        $this->fileSize = $fileSize;
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

        if ($this->SizeFile() == false) {
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
        if (
            $this->fileType === 'image/png' || $this->fileType === 'application/pdf' ||
            $this->fileType === 'image/jpeg' || $this->fileType === 'text/plain' ||
            $this->fileType === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
            || $this->fileType === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' ||
            $this->fileType === 'text/csv'
        ) {
            return true;
        }
        return false;
    }

    private function SizeFile()
    {
        if ($this->fileSize < 5000000) {
            return true;
        }
        return false;
    }
}
