<?php

if (isset($_POST['add'])) {
    $fname = trim($_POST['firstname']);
    $mname = trim($_POST['middlename']);
    $lname = trim($_POST['lastname']);
    $address = trim($_POST['address']);
    $contact = trim($_POST['contact']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $passwordRepeat = trim($_POST['passwordRepeat']);

    include '../database/database.php';
    include '../model/users.model.php';
    include '../controller/users.contr.php';

    $AddUser = new AddUserContr($fname, $mname, $lname, $address, $email, $password, $contact, $passwordRepeat);

    $AddUser->addUser();

    header("location: ../view/user.php?status=UserInputSuccess");
}

if (isset($_POST['edit'])) {
    $id = trim($_POST['id']);
    $fname = trim($_POST['firstname']);
    $mname = trim($_POST['middlename']);
    $lname = trim($_POST['lastname']);
    $address = trim($_POST['address']);
    $contact = trim($_POST['contact']);
    $email = trim($_POST['email']);

    include '../database/database.php';
    include '../model/users.model.php';
    include '../controller/users.contr.php';

    $UserEdit = new EditUserContr($id, $fname, $mname, $lname, $address, $contact, $email);
    $UserEdit->edit();

    header("location: ../view/user.php?status=UserInputSuccess");
}
