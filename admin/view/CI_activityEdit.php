<?php

$id = $_GET['id'];


include '../database/database.php';


class DisplayActivity extends Dbh
{

    public function getActivity($id)
    {

        $sql = 'SELECT * FROM ci_activity where activity_id = ?;';
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute([$id])) {;
            $stmt = null;
            echo "error";
            exit;
        }

        $result = $stmt->fetchAll((PDO::FETCH_ASSOC));
        return $result;
    }
}

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

$display = new DisplayActivity();
$records = $display->getActivity($id);

$user = new DisplayUsers();
$users = $user->getUsers();

?>

<form action="../includes/CI_activity.inc.php" method="POST">
    <?php foreach ($records as $data) { ?>
        <input type="hidden" name="id" value="<?php echo $data['activity_id']; ?>" readonly>

        <label for="category">Activity Category</label>
        <select name="type" id="type">
            <option value="Internal" <?php echo $data['type'] == "Internal" ? 'selected="selected"' : ""; ?>>Internal</option>
            <option value="External" <?php echo $data['type'] == "External" ? 'selected="selected"' : ""; ?>>External</option>
            <option value="CIO Sponsored" <?php echo $data['type'] == "CIO Sponsored" ? 'selected="selected"' : ""; ?>>CIO Sponsored</option>
        </select>

        <label for="title">Activity Title</label>
        <input type="text" name="title" id="title" value="<?php echo $data['title']; ?>">

        <label for="date">Activity Date</label>
        <input type="date" name="date" id="date" value="<?php echo $data['date']; ?>">

        <label for="venue">Activity Venue</label>
        <input type="text" name="venue" id="venue" value="<?php echo $data['venue']; ?>">

        <label for="department">Activity Department</label>
        <input type="text" name="department" id="department" value="<?php echo $data['department']; ?>">

        <label for="division">division</label>
        <select name="division" value="<?php echo $data['division'] ?>">
            <option value="Integrated School">Integrated School</option>
            <option value="College">College</option>
            <option value="ASF/ASP">ASF/ASP</option>
        </select>

        <label for="duration">Activity duration</label>
        <input type="number" name="duration" id="duration" value="<?php echo $data['duration']; ?>">

        <label for="supervisor">Supervisor</label>
        <select name="supervisor" id="type">
            <option disabled selected value> -- select an option -- </option>
            <?php foreach ($users as $user) : ?>
                <option value="<?= $user['user_id'] ?>"><?= $user['first_name'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="description">Activity Description</label>
        <input type="text" name="description" id="description" value="<?php echo $data['description']; ?>">

        <label for="cipoints">Activity Max Value</label>
        <input type="number" name="cipoints" id="cipoints" value="<?php echo $data['ci_points']; ?>">

        <button type="submit" name="edit" id="edit">submit</button>
    <?php } ?>
</form>
<button type="button" onclick="location.href='../view/ciactivities.php'">Back</button>