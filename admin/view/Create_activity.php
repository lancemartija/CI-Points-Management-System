<?php

include '../database/database.php';

class DisplayUsers extends Dbh
{

    public function getUsers()
    {
        $sql = 'SELECT * FROM user;';
        $stmt = $this->connect()->query($sql);
        $result = 0;

        if (!$stmt) {
            $stmt = null;
            exit;
        }

        while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
            $result = $row;
        }

        $stmt = null;
        return $result;
    }
}

$display = new DisplayUsers();
$records = $display->getUsers();
?>

<form action="../includes/ciactivities.inc.php" method="POST">

    <label for="type">Activity Category:</label>
    <select name="type" id="type">
        <option disabled selected value> -- select an option -- </option>
        <option value="Internal">Internal</option>
        <option value="External">External</option>
        <option value="CIO Sponsored">CIO Sponsored</option>
    </select><br>

    <label for="title">Enter Activity Title</label>
    <input type="text" name="title" id="title"><br>

    <label for="date">Enter Activity Date</label>
    <input type="date" name="date" id="date"><br>

    <label for="venue">Enter Activity Venue</label>
    <input type="text" name="venue" id="venue"><br>

    <label for="department">Enter Department</label>
    <input type="text" name="department" id="venue"><br>

    <label for="division">Division</label>
    <select name="division" id="type">
        <option disabled selected value> -- select an option -- </option>
        <option value="Integrated School">Integrated School</option>
        <option value="College">College</option>
        <option value="ASF/ASP">ASF/ASP</option>
    </select><br>

    <label for="supervisor">Supervisor</label>
    <select name="supervisor" id="type">
        <option disabled selected value> -- select an option -- </option>
        <?php foreach ($records as $data) : ?>
            <option value="<?= $data['user_id'] ?>"><?= $data['first_name'] ?></option>
        <?php endforeach; ?>
    </select><br>

    <label for="duration">Enter Activity Duration</label>
    <input type="number" name="duration" id="duration"><br>

    <label for="description">Enter Activity Description</label>
    <input type="text" name="description" id="description"><br>

    <label for="cipoints">Enter Activity CI Points Max Value</label>
    <input type="number" name="cipoints" id="cipoints"><br>

    <button type="submit" name="add">Submit</button>

</form>