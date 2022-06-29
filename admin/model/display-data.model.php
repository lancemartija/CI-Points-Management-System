<?php
class DisplayUsers extends Dbh
{

    public function getUser()
    {
        $sql = 'SELECT * FROM user;';
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute()) {
            $stmt = null;
            echo "error";
            exit;
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

class DisplayActivity extends Dbh
{

    public function getActivity()
    {

        $sql = 'SELECT * FROM ci_activity;';
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute()) {;
            $stmt = null;
            echo "error";
            exit;
        }

        $result = $stmt->fetchAll((PDO::FETCH_ASSOC));
        return $result;
    }
}
