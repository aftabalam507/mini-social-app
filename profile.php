<?php
require "functions.php";
check_login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Profile - my website</title>
</head>

<body>
  <?php require_once "header.php"; ?>
  <div style="margin: auto; max-width: 600px;">
    <h2 style="text-align: center;">User Profile</h2>
    <table style="text-align: center;">
      <tr>
        <td><img src="img.jpg" style="width: 150px; height: 150px; object-fit: cover;"></td>
      </tr>
      <tr>
        <td><?php echo $_SESSION['info']['username'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_SESSION['info']['email'] ?></td>
      </tr>
    </table>
    <hr>
    <h5>Create a Post</h5>
    <form method="post" style="margin:auto; padding:10px;">

      <textarea name="post" id="" rows="8"></textarea><br>

      <button class="my-btn">Post</button>
    </form>
  </div>
  <?php require "footer.php"; ?>
</body>

</html>