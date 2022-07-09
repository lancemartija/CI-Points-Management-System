<?php

$id = $_GET['id'];
$userID = $_GET['userid'];
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


<form action="../includes/submitActivity.inc.php?user=<?php echo $userID; ?>" method="POST" enctype="multipart/form-data">
    <?php foreach ($records as $data) { ?>

        <!-- <input type="text" name="user" value="<?php echo $userID; ?>" readonly> -->
        <label for="id">No.</label>
        <input type="text" name="activity_id" id="activity_id" value="<?php echo $data['activity_id']; ?>" readonly>

        <label for="category">Activity Category</label>
        <input type="text" name="category" value="<?php echo $data['type']; ?>" readonly>

        <label for="title">Activity Title</label>
        <input type="text" name="title" id="title" value="<?php echo $data['title']; ?>" readonly>

        <label for="date">Activity Date</label>
        <input type="text" name="date" id="date" value="<?php echo $data['date']; ?>" readonly>

        <label for="venue">Activity Venue</label>
        <input type="text" name="venue" id="venue" value="<?php echo $data['venue']; ?>" readonly>

        <label for="duration">Activity duration</label>
        <input type="text" name="duration" id="duration" value="<?php echo $data['duration']; ?>" readonly>

        <label for="description">Activity Description</label>
        <input type="text" name="description" id="description" value="<?php echo $data['description']; ?>" readonly>

        <label for="maxPoints">Activity Max Value</label>
        <input type="text" name="maxPoints" id="maxPoints" value="<?php echo $data['ci_points']; ?>" readonly><br>
        <br><br>
        <label for="hours">Rendered Hours: </label>
        <input type="number" name="number" id="number" required>

        <input type="file" name="files[]" id="files" required multiple><br>


    <?php } ?>
    <button type="submit" name="submit" id="submit">submit</button>
</form>

<button type="button" onclick="location.href='../view/ci_activity.php?id=<?php echo $userID; ?>'">Back</button>