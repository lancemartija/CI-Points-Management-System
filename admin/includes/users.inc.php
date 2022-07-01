<?php

if (isset($_POST['submit'])) {
    $fname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
    $mname = filter_var(trim($_POST['middlename']), FILTER_SANITIZE_STRING);
    $lname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
    $address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
    $contact = filter_var(trim($_POST['contact']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $passwordRepeat = filter_var(trim($_POST['passwordRepeat']), FILTER_SANITIZE_STRING);

    include '../database/database.php';
    include '../model/users.model.php';
    include '../controller/users.contr.php';

    $AddUser = new AddUserContr($fname, $mname, $lname, $address, $email, $password, $contact, $passwordRepeat);

    $AddUser->addUser();

    header("location: ../view/dashboard.php?status=UserInputSuccess");
}

if (isset($_POST['edit'])) {
    $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
    $fname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
    $mname = filter_var(trim($_POST['middlename']), FILTER_SANITIZE_STRING);
    $lname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
    $address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
    $contact = filter_var(trim($_POST['contact']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

    include '../database/database.php';
    include '../model/users.model.php';
    include '../controller/users.contr.php';

    $UserEdit = new EditUserContr($id, $fname, $mname, $lname, $address, $contact, $email);
    $UserEdit->edit();

    header("location: ../view/user.php?status=UserInputSuccess");
}
