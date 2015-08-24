<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>13th Annual Alumni Meet &middot; New Password</title>
    <?php include 'topHead.php'; ?>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <div class="container">
      <h2 align="center">Enter New Password</h2>
      <form class="" action="updatePassword.php" method="post">
        <div class="form-group">
          <label for="password">New Password</label>
          <input type="password" class="form-control" name="password" value="">
        </div>
        <button class="btn btn-primary btn-block" type="submit" name="button">Submit</button>
      </form>
    </div>
  </body>
</html>
