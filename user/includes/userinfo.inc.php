<?php

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $fname = $_POST['first-name'];
  $mname = $_POST['middle-name'];
  $lname = $_POST['last-name'];
  $address = $_POST['address'];
  $num = $_POST['contact-number'];
  $dept = $_POST['Department'];
  $div = $_POST['Division'];

  include_once '../database/database.php';
  include_once '../model/userinfo.model.php';
  include_once '../controller/userinfo.contr.php';

  $addUserInfo = new UserInfoContr($id, $fname, $mname, $lname, $address, $num, $dept, $div);

  $addUserInfo->addUserInfo();

  header('location: ../view/dashboard.php?register=success');
}
