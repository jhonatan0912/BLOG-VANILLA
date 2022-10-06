<?php
class Article
{
  public $idArticle;
  public $image;
  public $title;
  public $description;

  function __construct($idArticle, $image, $title, $description)
  {
    $this->idArticle = $idArticle;
    $this->image = $image;
    $this->title = $title;
    $this->description = $description;
  }

  static function fromRow($row)
  {
    $article = new Article(
      $row['idArticle'],
      $row['image'],
      $row['title'],
      $row['description']
    );
    return $article;
  }
}
