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

$display = new DisplayActivity();
$records = $display->getActivity($id);

?>

<form action="../includes/CI_activity.inc.php" method="POST">
    <?php foreach ($records as $data) { ?>
        <label for="id">No.</label>
        <input type="text" name="id" id="id" value="<?php echo $data['activity_id']; ?>" readonly>

        <label for="category">Activity Category</label>
        <select name="type" id="type">
            <option value="internal" <?php echo $data['type'] == "Internal" ? 'selected="selected"' : ""; ?>>Internal</option>
            <option value="external" <?php echo $data['type'] == "External" ? 'selected="selected"' : ""; ?>>External</option>
            <option value="sponsored" <?php echo $data['type'] == "CIO Sponsored" ? 'selected="selected"' : ""; ?>>CIO Sponsored</option>
        </select>

        <label for="title">Activity Title</label>
        <input type="text" name="title" id="title" value="<?php echo $data['title']; ?>">

        <label for="date">Activity Date</label>
        <input type="text" name="date" id="date" value="<?php echo $data['date']; ?>">

        <label for="venue">Activity Venue</label>
        <input type="text" name="venue" id="venue" value="<?php echo $data['venue']; ?>">

        <label for="department">Activity Department</label>
        <input type="text" name="department" id="department" value="<?php echo $data['department']; ?>">

        <label for="division">Activity Division</label>
        <input type="text" name="division" id="division" value="<?php echo $data['division']; ?>">

        <label for="duration">Activity duration</label>
        <input type="text" name="duration" id="duration" value="<?php echo $data['duration']; ?>">

        <label for="description">Activity Description</label>
        <input type="text" name="description" id="description" value="<?php echo $data['description']; ?>">

        <label for="maxPoints">Activity Max Value</label>
        <input type="text" name="maxPoints" id="maxPoints" value="<?php echo $data['max_ci_points']; ?>">

        <button type="submit" name="edit" id="edit">submit</button>
    <?php } ?>
</form>
<button type="button" onclick="location.href='../view/CI_Activities.php'">Back</button>