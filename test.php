<?php
if (isset($_POST['send'])) {
  if (isset($_POST['enabled'])) {
    echo "1";
  } else {
    echo "0";
  }
}
?>
<form action="" method="POST">
  <input type="checkbox" name="enabled" value="2">

  <input type="submit" value="send" name="send">
</form>