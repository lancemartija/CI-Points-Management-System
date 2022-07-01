<?php


class AddUser extends Dbh
{

    protected function setUser($fname, $mname, $lname, $address, $email, $password, $contact)
    {
        $stmt = $this->connect()->prepare('INSERT INTO user (first_name, middle_name, last_name, address, email, password, contact_number) values (?, ?, ?, ?, ?, ?, ?)');

        $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute([$fname, $mname, $lname, $address, $email, $hashedpwd, $contact])) {
            $stmt = null;
            header("Location: ../view/addUser.php?error=stmtfailed");
            exit;
        }

        $stmt = null;
    }

    protected function checkUser($email)
    {
        $stmt = $this->connect()->prepare('SELECT user_id FROM user WHERE email = ?;');
        $resultCheck = true;

        if (!$stmt->execute([$email])) {
            $stmt = null;
            header("Location: ../register.php?error=stmtfailed");
            exit;
        }

        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        }

        return $resultCheck;
    }
}

class EditUser extends Dbh
{

    protected function editUser($id, $fname, $mname, $lname, $address, $email, $contact)
    {
        $stmt = $this->connect()->prepare('UPDATE user set first_name = ? , middle_name = ?, last_name = ?, address = ?, email = ?, contact_number = ? where user_id = ?;');

        if (!$stmt->execute([$fname, $mname, $lname, $address, $email, $contact, $id])) {
            $stmt = null;
            header("location: ../editUser.php?error=stmtfailed");
            exit;
        }

        $stmt = null;
    }
}
