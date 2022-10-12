<?php
require_once __DIR__ . './../../server/controller/ArticleController.php';
require_once __DIR__ . './../tools/ImageTools.php';
require_once __DIR__ . './../tools/HttpTools.php';

if (
  isset($_POST['btn-create']) &&
  isset($_FILES['image']) &&
  isset($_POST['title']) &&
  isset($_POST['description'])
) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $enabled = true;
  $image = '';
  $article = new Article(0, $image, $title, $description, $enabled);
  if (!empty($_FILES['image']) && !empty($_POST['title']) && !empty($_POST['description'])) {
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
