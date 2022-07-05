<?php
$data = [
    'title' => 'CI_Activities',
    'dir' => '../../'
];

session_start();

if (!isset($_SESSION['userid'])) {
    header('Location: ../../index.php');
    exit;
}

// require_once('../layouts/header.php');
// require_once('../layouts/navbar.php');
// require_once('../layouts/sidebar.php');
// require_once('../layouts/main.php');
require_once('../layouts/footer.php');
?>

<a href="Create_activity.php">Create Activity</a><br>

<?php
include '../database/database.php';

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

$display = new DisplayActivity();
$records = $display->getActivity();

?>


<table>
    <tr>
        <th>Activity Category</th>
        <th>Activity Title</th>
        <th>Activity Date</th>
        <th>Activity Venue</th>
        <th>Activity Department</th>
        <th>Activity Division</th>
        <th>Activity Duration</th>
        <th>Activity Description</th>
        <th>Activity CI Points Max Value</th>
    </tr>
    <?php foreach ($records as $data) { ?>
        <tr>
            <td><?php echo $data['type']; ?></td>
            <td><?php echo $data['title']; ?></td>
            <td><?php echo $data['date']; ?></td>
            <td><?php echo $data['venue']; ?></td>
            <td><?php echo $data['department']; ?></td>
            <td><?php echo $data['division']; ?></td>
            <td><?php echo $data['duration']; ?></td>
            <td><?php echo $data['description']; ?></td>
            <td><?php echo $data['max_ci_points']; ?></td>
            <td><button type="button" onclick="location.href='../view/CI_activityEdit.php?id=<?php echo $data['activity_id']; ?>'">Edit</button></td>
        </tr>
    <?php } ?>
</table>
<button type="button" onclick="location.href='../view/dashboard.php'">Back</button>