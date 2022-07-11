<?php

class Export extends Dbh
{

    protected function exportinfo($id)
    {
        $stmt = $this->connect()->prepare('SELECT ci.title, ci.type, ci.ci_points, ur.date_requested, ur.rendered_hours, ur.request_status FROM user_request ur INNER JOIN ci_activity ci ON ur.activity_id = ci.activity_id AND ur.user_id = ?');


        if (!$stmt->execute([$id])) {
            $stmt = null;
            header('location: ../view/ciprequest.php?error=stmtfailed');
            exit;
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
