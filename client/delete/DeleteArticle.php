<?php
require_once __DIR__ . './../../server/controller/ArticleController.php';


if (!empty($_GET['id'])) {
  $idArticle = $_GET['id'];
  
} else {
  echo "<h1>id is empty</h1>";
}
