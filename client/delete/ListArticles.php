<?php
require_once __DIR__ . './../../server/controller/ArticleController.php';

$articles = ArticleController::list();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Delete articles</title>
</head>

<body>

  <main class="main-content grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 w-7/12 m-auto">

    <?php foreach ($articles as $article) : ?>
      <div class="card bg-slate-300 text-center rounded-lg pb-10">
        <div class="img-container w-full h-60 mt-5">
          <img src="<?php echo $article->image ?>" alt="<?php echo $article->idArticle; ?>" class="w-full h-full object-contain">
        </div>
        <div class="title p-5 text-lg">
          <p class="font-bold"><?php echo ucwords($article->title); ?></p>
        </div>
        <div class="description p-5">
          <p><?php echo $article->description; ?></p>
        </div>
        <a class="bg-blue-400 text-white p-2 rounded-lg hover:scale-105" href="./../update/UpdateArticle.php?idArticle=<?php echo $article->idArticle; ?>">Update</a>
        <a class="bg-red-400 text-white p-2 rounded-lg  hover:scale-105" href="./DeleteArticle.php?idArticle=<?php echo $article->idArticle; ?>">Delete</a>
      </div>
    <?php endforeach; ?>

  </main>
  <?php if (count($articles) < 1) : ?>
    <div class="text-7xl text-center text-red-700 w-screen h-screen flex items-center justify-center">No one article found!!</div>
  <?php endif; ?>
</body>

</html>