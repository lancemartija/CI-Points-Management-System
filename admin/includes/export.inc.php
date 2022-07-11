<?php

if (isset($_POST['export'])) {
    $file = fopen('php://output', 'w');
    $headers = ['user_id', 'first_name', 'middle_name', 'last_name', 'address', 'email', 'password', 'contact_number', 'department', 'division', 'status', 'type', 'date_created', 'date_updated'];

    include '../database/database.php';
    include '../model/export.model.php';
    include '../controller/export.contr.php';


    $data =  new ExportUserContr($file, $headers);

    $data->export();

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=user.csv');
    fclose($file);
}


if (isset($_POST['ci_export'])) {
    $file = fopen('php://output', 'w');
    $header = ['Title', 'Category', 'Date', 'Venue', 'Department', 'Division', 'Supervisor', 'Duration', 'CI_Points_Amount', 'Academic_Year', 'Semester', 'Description'];

    include '../database/database.php';
    include '../model/export.model.php';
    include '../controller/export.contr.php';

    $data = new ExportActivityContr($file, $header);

    $data->exportAct();

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=CI_Activity.csv');
    fclose($file);
}

if (isset($_POST['Rptexport'])) {
    $file = fopen('php://output', 'w');
    $header = ['firstname', 'middlename', 'lastname', 'Email', 'Semester', 'Academic Year', 'CI Points'];

    include '../database/database.php';
    include '../model/export.model.php';
    include '../controller/export.contr.php';

    $data = new ReportExportContr($file, $header);
    $data->RptExport();

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=Reports.csv');
    fclose($file);
}
