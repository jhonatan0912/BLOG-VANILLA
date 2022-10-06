<?php
require_once __DIR__ . '/../tools/HttpTools.php';
if (
  isset($_POST['user']) &&
  isset($_POST['userPassword']) &&
  isset($_POST['login'])
) {
  $user = $_POST['user'];
  $userPassword = $_POST['userPassword'];

  if ($user === "jhonatan" && $userPassword === "jhonatan1") {
    HttpTools::redirect('/client/CreateArticleForm.php');
  } else {
    echo "error";
  }
}
