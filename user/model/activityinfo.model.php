<?php

class SubmitRequest extends Dbh
{
  protected function setRequest($userid, $hours, $id, $filename, $filetype, $filedata)
  {
    $stmt = $this->connect()->prepare('INSERT INTO user_request (user_id, activity_id, supporting_docs_name, supporting_docs_type, supporting_docs, rendered_hours, request_status) VALUES (?, ?, ?, ?, ?, ?, "pending");');

    if (!$stmt->execute([$userid, $id, $filename, $filetype, $filedata, $hours])) {
      $stmt = null;
      header('location: ../view/activityinfo.php?id=' . $this->id . '&error=stmterror');
      exit;
    }
  }
}
