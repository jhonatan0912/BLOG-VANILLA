<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Create article</title>
</head>

<body>
  <h1 class="text-center text-3xl font-black">Create article</h1>
  <form class="flex flex-col w-3/4  sm:w-4/5 lg:w-2/5  m-auto mt-5 " action=" ./create/CreateArticle.php" method="POST" enctype="multipart/form-data">
    <label class="border-solid border-2 border-black mb-4 p-3 rounded-lg" for="image">
      <input class="border-solid cursor-pointer w-full" type="file" type="png/jpeg" name="image">
    </label>
    <label class="border-solid border-2 border-black mb-4 p-3 rounded-lg" for="title">
      <input class="border-solid w-full outline-none" type="text" name="title">
    </label>
    <label class="border-solid border-2 border-black mb-4 p-3 rounded-lg" for="description">
      <input class="border-solid w-full outline-none" type="text" name="description">
    </label>
    <input class="cursor-pointer border-solid border-2 border-red-600 w-48 py-2 rounded-lg font-bold m-auto" type="submit" name="btn-create" value="Create">
  </form>
</body>

</html>