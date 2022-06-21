<?php

print_r($_POST);

if (isset($_POST['submit'])) {
  $email =  filter_var(trim($_POST['email'], FILTER_SANITIZE_EMAIL));
  $pwd = trim($_POST['password']);
  $confirm_pwd = trim($_POST['confirm-password']);

  include_once '../database/database.php';
  include_once '../model/register.model.php';
  include_once '../controller/register.contr.php';

  $register =  new RegisterContr($email, $pwd, $confirm_pwd);

  $register->registerUser();

  header('Location: ../view/userinfo.php');
}
