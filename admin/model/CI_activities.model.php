<?php


class CIActivities extends Dbh
{

    protected function setActivity($title, $date, $venue, $description, $type, $duration, $maxValue)
    {
        $date_create = date('m/d/Y h:i:s a', time());
        $stmt = $this->connect()->prepare('INSERT into ci_activity (title, date, venue, description, type, duration, Max_Value_Points, date_created) values (?, ?, ?, ?, ?, ? ,?,?);');

        if (!$stmt->execute([$title, $date, $venue, $description, $type, $duration, $maxValue, $date_create])) {
            $stmt = null;
            header('Location: ../Create_activity.php?error=stmtfailed');
            exit;
        };

        $stmt = null;
    }
}

class EditActivity extends Dbh
{

    protected function setActivity($id, $title, $date, $venue, $description, $type, $duration, $maxValue)
    {

        $stmt = $this->connect()->prepare('UPDATE ci_activity set title = ?, date = ?, venue = ?, description = ?, type = ?, duration = ?, Max_Value_Points = ? where activity_id = ?');

        if (!$stmt->execute([$title, $date, $venue, $description, $type, $duration, $maxValue, $id])) {
            $stmt = null;
            header('Location: ../Create_activity.php?error=stmtfailed');
            exit;
        };

        $stmt = null;
    }
}
