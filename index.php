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
  <style>
    .vibrate {
      background-color: gray;
      animation: vibrate 3s infinite;
    }

    @keyframes vibrate {
      from {
        background-color: gray;
      }

      to {
        background-color: rgb(209 213 219);
      }
    }
  </style>
</head>

<body class="w-screen h-screen overflow-x-hidden scroll-smooth">
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

      <?php if ($article->enabled == 1) : ?>
        <div class="card bg-slate-300 text-center rounded-lg">
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
      <?php elseif ($article->enabled == 0) : ?>
        <div class="card bg-slate-300 text-center rounded-lg hidden">
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
      <?php endif; ?>

    <?php endforeach; ?>
  </main>
  <?php if (count($articles) < 1) : ?>
    <div class="loader-containe  grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 w-7/12 m-auto">
      <div class="loader bg-gray-300 h-80 rounded-lg p-5">
        <div class=" image-loader w-full h-3/5 mb-1 rounded-lg vibrate"></div>
        <div class=" title-loader w-full  h-1/5 mb-1 rounded-lg vibrate"></div>
        <div class=" subtitle-loader w-full  h-1/5 rounded-lg vibrate"></div>
      </div>
      <div class="loader bg-gray-300 h-80 rounded-lg p-5">
        <div class=" image-loader w-full h-3/5 mb-1 rounded-lg vibrate"></div>
        <div class=" title-loader w-full  h-1/5 mb-1 rounded-lg vibrate"></div>
        <div class=" subtitle-loader w-full  h-1/5 rounded-lg vibrate"></div>
      </div>
      <div class="loader bg-gray-300 h-80 rounded-lg p-5">
        <div class=" image-loader w-full h-3/5 mb-1 rounded-lg vibrate"></div>
        <div class=" title-loader w-full  h-1/5 mb-1 rounded-lg vibrate"></div>
        <div class=" subtitle-loader w-full  h-1/5 rounded-lg vibrate"></div>
      </div>
      <div class="loader bg-gray-300 h-80 rounded-lg p-5">
        <div class=" image-loader w-full h-3/5 mb-1 rounded-lg vibrate"></div>
        <div class=" title-loader w-full  h-1/5 mb-1 rounded-lg vibrate"></div>
        <div class=" subtitle-loader w-full  h-1/5 rounded-lg vibrate"></div>
      </div>
      <div class="loader bg-gray-300 h-80 rounded-lg p-5">
        <div class=" image-loader w-full h-3/5 mb-1 rounded-lg vibrate"></div>
        <div class=" title-loader w-full  h-1/5 mb-1 rounded-lg vibrate"></div>
        <div class=" subtitle-loader w-full  h-1/5 rounded-lg vibrate"></div>
      </div>
      <div class="loader bg-gray-300 h-80 rounded-lg p-5">
        <div class=" image-loader w-full h-3/5 mb-1 rounded-lg vibrate"></div>
        <div class=" title-loader w-full  h-1/5 mb-1 rounded-lg vibrate"></div>
        <div class=" subtitle-loader w-full  h-1/5 rounded-lg vibrate"></div>
      </div>
    </div>
  <?php endif; ?>

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