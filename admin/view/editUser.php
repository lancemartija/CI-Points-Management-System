<?php

$id = $_GET['id'];
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

<form action=" ../includes/users.inc.php" method="POST">
    <?php foreach ($records as $data) { ?>
        <input type="hidden" name="id" value="<?php echo $id ?>" readonly>

        <label for="">firstname</label>
        <input type="text" name="firstname" value="<?php echo $data['first_name'] ?>">
        <br>
        <label for="">middlename</label>
        <input type="text" name="middlename" value="<?php echo $data['middle_name'] ?>">
        <br>
        <label for="">lastname</label>
        <input type="text" name="lastname" value="<?php echo $data['last_name'] ?>">
        <br>
        <label for="">email</label>
        <input type="text" name="email" value="<?php echo $data['email'] ?>">
        <br>
        <label for="">address</label>
        <input type="text" name="address" value="<?php echo $data['address'] ?>">
        <br>
        <label for="">contact number</label>
        <input type="text" name="contact" value="<?php echo $data['contact_number'] ?>">
        <br>
        <label for="department">department</label>
        <input type="text" name="department" value="<?php echo $data['department'] ?>">
        <br>
        <label for="division">division</label>
        <select name="division" id="type" value="<?php echo $data['division'] ?>">
            <option value="Integrated School">Integrated School</option>
            <option value="College">College</option>
            <option value="ASF/ASP">ASF/ASP</option>
        </select><br>

        <label for="status">status</label>
        <select name="status" id="type" value="<?php echo $data['status'] ?>">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select><br>

    <?php } ?>
    <button type="submit" name="edit">Submit</button>
</form>
<button type="button" onclick="location.href='../view/users.php'">Back</button>