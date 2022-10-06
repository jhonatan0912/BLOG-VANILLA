<?php
require_once __DIR__ . './../../server/controller/ArticleController.php';
require_once __DIR__ . './../tools/ImageTools.php';
require_once __DIR__ . './../tools/HttpTools.php';

if (
  isset($_FILES['image']) &&
  isset($_POST['title']) &&
  isset($_POST['description'])
) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $image = '';
  $article = new Article(0, $image, $title, $description);
  if (!empty($_FILES['image']) && !empty($_FILES['title']) && !empty($_FILES['description'])) {
    $id = ArticleController::createArticle($article);
    if ($id != null) {
      if (isset($_FILES['image'])) {
        $path = ImageTools::subirImagen($_FILES['image'], "article", $id);
        $article = ArticleController::getById($id);
        $article->image = $path;
        ArticleController::updateArticle($article);
      }
      HttpTools::redirect('/');
    } else {
      HttpTools::redirect('/');
    }
  } else {
    echo "<h1>Failed! variables empty</h1>";
  }
}
