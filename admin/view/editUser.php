<?php

$id = $_GET['i'];
include '../database/database.php';
class DisplayUsers extends Dbh
{

    public function getUser($id)
    {
        $sql = 'SELECT * FROM user where user_id = ?;';
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute([$id])) {
            $stmt = null;
            echo "error";
            exit;
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

$display = new DisplayUsers();
$records = $display->getUser($id);


?>

<form action="../includes/users.inc.php" method="POST">
    <?php foreach ($records as $data) { ?>
        <label for="">No.</label>
        <input type="text" name="id" value="<?php echo $id ?>" readonly>

        <label for="">firstname</label>
        <input type="text" name="firstname" value="<?php echo $data['first_name'] ?>">

        <label for="">middlename</label>
        <input type="text" name="middlename" value="<?php echo $data['middle_name'] ?>">

        <label for="">lastname</label>
        <input type="text" name="lastname" value="<?php echo $data['last_name'] ?>">

        <label for="">email</label>
        <input type="text" name="email" value="<?php echo $data['email'] ?>">

        <label for="">address</label>
        <input type="text" name="address" value="<?php echo $data['address'] ?>">

        <label for="">contact number</label>
        <input type="text" name="contact" value="<?php echo $data['contact_number'] ?>">

    <?php } ?>
    <button type="submit" name="edit">Submit</button>
</form>