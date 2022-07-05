<?php

class CIActivities extends Dbh
{
    protected function setActivity($title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $maxValue)
    {
        $stmt = $this->connect()->prepare('INSERT INTO ci_activity (title, date, venue, department, division, description, type, duration, user_id, max_ci_points) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');

        if (!$stmt->execute([$title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $maxValue])) {
            $stmt = null;
            header('Location: ../view/Create_activity.php?error=stmtfailed');
            exit;
        };

        $stmt = null;
    }
}

class EditActivity extends Dbh
{

    protected function setActivity($id, $title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $maxValue)
    {
        $stmt = $this->connect()->prepare('UPDATE ci_activity set title = ?, date = ?, venue = ?, department = ?, division = ?, description = ?, type = ?, duration = ?, user_id = ?, Max_Value_Points = ? where activity_id = ?');

        if (!$stmt->execute([$title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $maxValue, $id])) {
            $stmt = null;
            header('Location: ../view/Create_activity.php?error=stmtfailed');
            exit;
        };

        $stmt = null;
    }
}
