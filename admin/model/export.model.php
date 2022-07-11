<?php

class ExportUser extends Dbh
{


    protected function getInfo()
    {
        $stmt = $this->connect()->prepare('SELECT * from user');
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../view/users.php?error=stmtfailed");
            exit;
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

class ExportActivity extends Dbh
{

    protected function getActivity()
    {
        $stmt = $this->connect()->prepare('SELECT ci.activity_id, ci.title, ci.date, ci.venue, ci.department, ci.division, ci.description, ci.type, ci.duration, ci.ci_points, ci.semester, ay.ay_id, ay.year, u.user_id, u.first_name, u.middle_name, u.last_name FROM ci_activity ci LEFT JOIN user u ON ci.user_id = u.user_id LEFT JOIN academic_year ay ON ci.ay_id = ay.ay_id ');

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../view/users.php?error=stmtfailed");
            exit;
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}


class ReportExport extends Dbh
{

    protected function getReports()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM user u LEFT JOIN user_cip cip ON u.user_id = cip.user_id LEFT JOIN academic_year ay ON cip.ay_id = ay.ay_id ORDER BY ay.year + 0, cip.total_cip + 0');

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../view/users.php?error=stmtfailed");
            exit;
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
