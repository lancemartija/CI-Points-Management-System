<?php

if (isset($_POST['add'])) {
    $fname = trim($_POST['firstname']);
    $mname = trim($_POST['middlename']);
    $lname = trim($_POST['lastname']);
    $address = trim($_POST['address']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $passwordRepeat = trim($_POST['passwordRepeat']);
    $contact = trim($_POST['contact']);
    $department = trim($_POST['department']);
    $division = trim($_POST['division']);
    $status = trim($_POST['status']);
    $type = trim($_POST['type']);

    include '../database/database.php';
    include '../model/users.model.php';
    include '../controller/users.contr.php';

    $AddUser = new AddUserContr($fname, $mname, $lname, $address, $email, $password, $passwordRepeat, $contact, $department, $division, $status, $type);

    $AddUser->addUser();

    header("location: ../view/users.php?status=addedsuccessfully");
}

if (isset($_POST['edit'])) {
    $id = trim($_POST['id']);
    $fname = trim($_POST['firstname']);
    $mname = trim($_POST['middlename']);
    $lname = trim($_POST['lastname']);
    $address = trim($_POST['address']);
    $email = trim($_POST['email']);
    $contact = trim($_POST['contact']);
    $department = trim($_POST['department']);
    $division = trim($_POST['division']);
    $status = trim($_POST['status']);
    $type = trim($_POST['type']);

    include '../database/database.php';
    include '../model/users.model.php';
    include '../controller/users.contr.php';

    $UserEdit = new EditUserContr($id, $fname, $mname, $lname, $address, $email, $contact, $department, $division, $status, $type);
    $UserEdit->edit();

    header("location: ../view/users.php?status=editedsuccessfully");
}
