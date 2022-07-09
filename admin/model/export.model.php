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
