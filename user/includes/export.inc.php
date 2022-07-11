<?php

if (isset($_POST['ci_export'])) {

    $file = fopen('php://output', 'w');
    $headers = ['Title', 'Type', 'Date Requested', 'Rendered Hours', 'CI Points', 'Status'];

    $id = $_GET['id'];

    include '../database/database.php';
    include '../model/export.model.php';
    include '../controller/export.contr.php';

    $data = new ExportContr($file, $headers, $id);
    $data->export();

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=UserRequest.csv');
    fclose($file);
}
