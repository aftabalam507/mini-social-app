<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login - my website</title>
</head>

<body>
  <?php require_once "header.php"; ?>
  <div style="margin: auto; max-width: 600px;">
    <h2 style="text-align: center;">Login</h2>
    <form method="post" style="margin:auto; padding:10px;">
      <input type="text" name="email" placeholder="Email"><br>
      <input type="text" name="password" placeholder="Password"><br>
      <button class="my-btn">Login</button>
    </form>
  </div>
  <?php require "footer.php"; ?>
</body>

</html>