<?php
require_once __DIR__ . './../../server/controller/ArticleController.php';
require_once __DIR__ . './../tools/HttpTools.php';
require_once __DIR__ . './../tools/ImageTools.php';


if (!empty($_GET['idArticle'])) {
  $idArticle = $_GET['idArticle'];
  $article = ArticleController::getById($idArticle);
  $response = ArticleController::deleteById($idArticle);
  ImageTools::borrarImagen($article->image, "article");
  if ($response = true) {
    HttpTools::redirect('./ListArticles.php');
  } else {
    echo "Cannot delete article";
  }
} else {
  echo "<h1>id is empty</h1>";
}
