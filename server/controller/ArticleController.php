<?php
require_once __DIR__ . './../model/Article.php';
require_once __DIR__ . './../model/db.php';
class ArticleController
{

  static function list()
  {
    $db = new Conection();
    $sql = "SELECT * FROM blog_vanilla.article;";
    $table = $db->query($sql);
    $articles = [];
    foreach ($table as $row) {
      $articles[] = Article::fromRow($row);
    }
    return $articles;
  }

  static function createArticle($article)
  {
    $db = new Conection();
    $sql = "INSERT INTO `blog_vanilla`.`article`
              (
              `image`,
              `title`,
              `description`)
              VALUES
              (
              '$article->image',
              '$article->title',
              '$article->description'
              )";
    $id = $db->insert($sql);
    // echo $sql;
    return $id;
  }
  static function getById($id)
  {
    $db = new Conection();
    $sql = "SELECT * FROM blog_vanilla.article
                     WHERE idArticle=$id";
    $table = $db->query($sql);
    // echo $sql;
    if (count($table) > 0) {
      return Article::fromRow($table[0]);
    } else {
      return null;
    }
  }

  static function updateArticle($article)
  {
    $db = new Conection();
    $sql = "UPDATE `blog_vanilla`.`article`
              SET
              `idArticle` = $article->idArticle,
              `image` = '$article->image',
              `title` = '$article->title',
              `description` = '$article->description'
              WHERE `idArticle` = $article->idArticle;";
    // echo $sql;
    $success = $db->update($sql);
    return $success;
  }
}
