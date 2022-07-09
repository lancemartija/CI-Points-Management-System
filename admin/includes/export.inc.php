<?php

if (isset($_POST['export'])) {
    $file = fopen('php://output', 'w');
    $headers = ['user_id', 'first_name', 'middle_name', 'last_name', 'address', 'email', 'password', 'contact_number', 'department', 'division', 'status', 'type', 'date_created', 'date_updated'];

    include '../database/database.php';
    include '../model/export.model.php';
    include '../controller/export.contr.php';


    $data =  new ExportUserContr($file, $headers);

    $data->export();
}
