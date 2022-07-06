<?php
$data = [
    'title' => 'CIP Requests',
    'dir' => '../../'
];

session_start();

if (!isset($_SESSION['userid'])) {
    header('Location: ../../index.php');
    exit;
}
include_once '../database/database.php';
// include_once '../layouts/header.php';
// include_once '../layouts/navbar.php';
// include_once '../layouts/sidebar.php';
// include_once '../pages/ciprequests/main.php';
// include_once '../layouts/footer.php';



//select user_request.request_id, user.first_name,ci_activity.title from user_request INNER join user on user_request.request_id= user.user_id JOIN ci_activity on user_request.request_id = ci_activity.activity_id;

class DisplayRequest extends Dbh
{

    public function getData()
    {
        $stmt = $this->connect()->prepare('SELECT * from user_request');
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../view/ciprequests.php?error=stmtfailed");
            exit;
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

$display = new DisplayRequest();
$records = $display->getData();


?>

<table>
    <tr>
        <th>Request No.</th>
        <th>Activity No.</th>
        <th>User No.</th>
        <th>Supporting Documents</th>
    </tr>
    <?php foreach ($records as $data) { ?>
        <tr>
            <td><?php echo $data['request_id'] ?></td>
            <td><?php echo $data['activity_id'] ?></td>
            <td><?php echo $data['user_id'] ?></td>
            <td><a target="_blank" href="cipview.php?id=<?php echo $data['request_id'] ?>"><?php echo $data['supporting_docs_name'] ?></a></td>
        </tr>
    <?php } ?>
</table>

<button type="button" onclick="location.href='../view/dashboard.php'">Back</button>