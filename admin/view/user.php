<?php
$data = [
    'title' => 'user',
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

include '../database/database.php';
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


$display = new DisplayUsers();
$records = $display->getUser();

?>

<a href="../view/addUser.php">Add</a>

<table>
    <tr>
        <th>firstname</th>
        <th>middlename</th>
        <th>lastname</th>
        <th>email</th>
        <th>address</th>
        <th>contact number</th>
    </tr>
    <?php foreach ($records as $data) { ?>
        <tr>

            <td><?php echo $data['first_name'] ?></td>
            <td><?php echo $data['middle_name'] ?></td>
            <td><?php echo $data['last_name'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['address'] ?></td>
            <td><?php echo $data['contact_number'] ?></td>
            <td><button type="submit" name="edit" onclick="location.href='../view/editUser.php?i=<?php echo $data['user_id']; ?>'">edit</button></td>
        <?php } ?>
        </tr>

</table>