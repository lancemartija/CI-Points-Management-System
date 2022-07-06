<?php

class CIActivities extends Dbh
{
    protected function setActivity($title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $cipoints)
    {
        $stmt = $this->connect()->prepare('INSERT INTO ci_activity (title, date, venue, department, division, description, type, duration, user_id, max_ci_points) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');

        if (!$stmt->execute([$title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $cipoints])) {
            $stmt = null;
            header('Location: ../view/Create_activity.php?error=stmtfailed');
            exit;
        };

        $stmt = null;
    }
}

class EditActivity extends Dbh
{

    protected function setActivity($id, $title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $cipoints)
    {
        $stmt = $this->connect()->prepare('UPDATE ci_activity SET title = ?, date = ?, venue = ?, department = ?, division = ?, description = ?, type = ?, duration = ?, user_id = ?, ci_points = ? WHERE activity_id = ?');

        if (!$stmt->execute([$title, $date, $venue, $department, $division, $description, $type, $duration, $supervisor, $cipoints, $id])) {
            $stmt = null;
            header('Location: ../view/CI_activityEdit.php?id=' . $id . '&error=stmtfailed');
            exit;
        };

        $stmt = null;
    }
}
