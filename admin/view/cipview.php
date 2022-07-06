<?php

include_once '../database/database.php';
$dbh = new Dbh();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $dbh->connect()->prepare('SELECT * from user_request where request_id = ?');

    if (!$stmt->execute([$id])) {
        $stmt = null;
        header("location: ../views/ciprequests.php?error=stmtfailed");
        exit;
    }

    $records = $stmt->fetch();
    header('Content-Type:' . $records['supporting_docs_type']);
    echo $records['supporting_docs'];
}
