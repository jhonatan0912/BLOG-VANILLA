<?php
require_once __DIR__ . './../../server/controller/ArticleController.php';
require_once __DIR__ . './../tools/ImageTools.php';


if (!empty($_GET['id'])) {
  $idArticle = $_GET['id'];
  $image = $_FILES['image'];
  $title = $_POST['title'];
  $description = $_POST['description'];

  $article = ArticleController::getById($idArticle);
  $article = new Article($idArticle, $image, $title, $description);
  $path = ImageTools::subirImagen($image, "article", $idArticle);
  $article->image = $path;
  ArticleController::updateArticle($article);
} else {
  echo "<h1>id is empty</h1>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Update article</title>
</head>

<body>

  <h1 class="text-center text-3xl font-black mt-5">Update article</h1>
  <form class="flex flex-col w-3/4  sm:w-4/5 lg:w-2/5  m-auto mt-10 " action="" method="POST" enctype="multipart/form-data">
    <label class="border-solid border-2 border-black mb-4 p-3 rounded-lg" for="image">
      <input class="border-solid cursor-pointer w-full" type="file" accept="image/png, image/jpeg" name="image">
    </label>
    <label class="border-solid border-2 border-black mb-4 p-3 rounded-lg" for="title">
      <input class="border-solid w-full outline-none" type="text" name="title" required placeholder="Insert title" value="<?php echo $article->title ?>">
    </label>
    <label class="border-solid border-2 border-black mb-4 p-3 rounded-lg" for="description">
      <input class="border-solid w-full outline-none" type="text" name="description" placeholder="Insert description" value="<?php echo $article->description; ?>">
    </label>
    <input class="cursor-pointer border-solid border-2 border-red-600 w-48 py-2 rounded-lg font-bold m-auto " type="submit" name="btn-create" value="Update">
  </form>

</body>

</html>