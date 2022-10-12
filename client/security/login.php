<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a413ea44fb.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <title>Login</title>
</head>

<body class="w-screen h-screen bg-neutral-900 text-white flex items-center justify-center">

  <form action="./validateUser.php" method="POST" class="flex flex-col w-80 m-auto py-10 bg-red-500 text-center rounded-2xl">
    <h1 class="text-4xl mb-4 font-bold">Login</h1>
    <label for="user" class="m-3  bg-neutral-700 rounded">
      <input type="text" name="user" class="rounded-lg  bg-neutral-700 w-full outline-none text-center">
    </label>
    <label for="password" class="m-3  bg-neutral-700 rounded">
      <input type="password" name="userPassword" id="userPassword" class="rounded-lg  bg-neutral-700 w-4/5 outline-none text-center">
      <span id="show-password" class="cursor-pointer"><i class="fa fa-eye"></i></span>
    </label>
    <input class="my-3 cursor-pointer bg-purple-500 w-28 py-2 rounded-lg m-auto hover:scale-105" type="submit" value="Ingresar" name="login">
  </form>
  <script>
    $(document).ready(function() {
      $("#show-password").click(function(e) {
        e.preventDefault();
        const userPasswordLabel = document.getElementById("userPassword");
        if (userPasswordLabel.type == "password") {
          userPasswordLabel.type = "text"
        } else {
          userPasswordLabel.type = "password"
        }
      });
    });
  </script>
</body>

</html>