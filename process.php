<?php
  session_start();

  ########################
  $name = $_POST['name'];
  ########################

  if ($name == $name) {
    header("Location: index.html?id")
  }

  $_SESSION["email"] = $email;

  header('Location: ./page-2.html')
 ?>
