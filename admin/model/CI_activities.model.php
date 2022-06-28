<?php


class CIActivities extends Dbh
{



    protected function setActivity($title, $date, $venue, $description, $type, $duration)
    {
        $date_create = date('m/d/Y h:i:s a', time());
        $stmt = $this->connect()->prepare('INSERT into ci_activity (title, date, venue, description, type, duration, date_created) values (?, ?, ?, ?, ?, ? ,?);');
      
        if (!$stmt->execute([$title, $date, $venue, $description, $type, $duration, $date_create])) {
            $stmt = null;
            header('Location: ../Create_activity.php?error=stmtfailed');
            exit;
        };

        $stmt = null;
    }
}
