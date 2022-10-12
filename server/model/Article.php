<?php
class Article
{
  public $idArticle;
  public $image;
  public $title;
  public $description;
  public $enabled;

  function __construct($idArticle, $image, $title, $description, $enabled)
  {
    $this->idArticle = $idArticle;
    $this->image = $image;
    $this->title = $title;
    $this->description = $description;
    $this->enabled = $enabled;
  }

  static function fromRow($row)
  {
    $article = new Article(
      $row['idArticle'],
      $row['image'],
      $row['title'],
      $row['description'],
      $row['enabled']
    );
    return $article;
  }
}
