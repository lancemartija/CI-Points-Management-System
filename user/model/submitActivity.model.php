<?php


class submit extends Dbh
{

    protected function setSubmit($userID, $actID, $fileName, $fileType, $fileData, $numberHrs)
    {

        $stmt = $this->connect()->prepare('INSERT into user_request (user_id, activity_id, supporting_docs_name, supporting_docs_type, supporting_docs, rendered_hours) values (?,?,?,?,?,?);');

        if (!$stmt->execute([$userID, $actID, $fileName, $fileType, $fileData, $numberHrs])) {
            $stmt = null;
            header("location: ../view/dashboard.php?error=stmtfailed");
            exit;
        }
    }
}