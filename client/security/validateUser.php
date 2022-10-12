<?php
require_once __DIR__ . '/../tools/HttpTools.php';
if (
  isset($_POST['user']) &&
  isset($_POST['userPassword']) &&
  isset($_POST['login'])
) {
  $user = $_POST['user'];
  $userPassword = $_POST['userPassword'];

  if ($user === "jhonatan" && $userPassword === "566b13062c21928f6e257febcf1f11138ed511f1195600c95cbc64206931c197823441c59ad98e44627022772b1dbecdc1dca43b97f34a172bc40db615975922") {
    HttpTools::redirect('/client/CreateArticleForm.php');
  } else {
    echo "error";
  }
}
