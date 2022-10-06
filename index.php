<?php
require_once __DIR__ . './server/controller/ArticleController.php';
$articles = ArticleController::list();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/a413ea44fb.js" crossorigin="anonymous"></script>
  <title>Home | Blog</title>
</head>

<body class="w-screen h-screen overflow-x-hidden">
  <header class="flex w-full justify-between px-16 py-8">
    <h1 class="font-black text-3xl">
      Blog vanilla
    </h1>
    <div>
      <a href="/client/security/login.php">
        <i class="fas fa-user-cog text-2xl"></i>
      </a>
    </div>
  </header>
  <main class="main-content grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 w-7/12 m-auto">

    <?php foreach ($articles as $article) : ?>
      <div class="card bg-slate-500 text-center">
        <div class="img-container w-full h-60 mt-5">
          <img src="<?php echo $article->image ?>" alt="<?php echo $article->idArticle; ?>" class="w-full h-full object-contain">
        </div>
        <div class="title p-5 text-lg">
          <p class="font-bold"><?php echo ucwords($article->title); ?></p>
        </div>
        <div class="description p-5">
          <p><?php echo $article->description; ?></p>
        </div>
      </div>
    <?php endforeach; ?>

  </main>

  <script>
    const body = document.body;
    body.addEventListener('keydown', (e) => {
      if (e.key == 'Enter') {
        location.reload();
      }
    })
  </script>
</body>

</html>