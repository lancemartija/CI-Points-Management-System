<?php

if (isset($_POST['submit'])) {
  # Grabbing data
  $uid = trim($_POST['email']);
  $pwd = trim($_POST['password']);

  # Instatiate LoginContr class
  include_once '../database/database.php';
  include_once '../model/login.model.php';
  include_once '../controller/login.contr.php';
  $login = new LoginContr($uid, $pwd);

  # Running error handlers and user login
  $login->loginUser();

  # Going to User Dashboard
  header('Location: ../view/dashboard.php');
}
