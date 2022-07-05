<?php


class CIActivities extends Dbh
{
    protected function setActivity($title, $date, $venue, $department, $division, $description, $type, $duration, $maxValue)
    {
        $stmt = $this->connect()->prepare('INSERT INTO ci_activity (title, date, venue, department, division, description, type, duration, max_ci_points) values (?, ?, ?, ?, ?, ?, ?, ?, ?);');

        if (!$stmt->execute([$title, $date, $venue, $department, $division, $description, $type, $duration, $maxValue])) {
            $stmt = null;
            header('Location: ../view/Create_activity.php?error=stmtfailed');
            exit;
        };

        $stmt = null;
    }
}

class EditActivity extends Dbh
{

    protected function setActivity($id, $title, $date, $venue, $department, $division, $description, $type, $duration, $maxValue)
    {
        $stmt = $this->connect()->prepare('UPDATE ci_activity set title = ?, date = ?, venue = ?, department = ?, division = ?, description = ?, type = ?, duration = ?, Max_Value_Points = ? where activity_id = ?');

        if (!$stmt->execute([$title, $date, $venue, $department, $division, $description, $type, $duration, $maxValue, $id])) {
            $stmt = null;
            header('Location: ../view/Create_activity.php?error=stmtfailed');
            exit;
        };

        $stmt = null;
    }
}
