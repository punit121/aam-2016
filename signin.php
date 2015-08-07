<?php session_start(); ?>
<html>

<head>
  <title>13th Annual Alumni Meet &middot; Login</title>
  <?php include 'topHead.php'; ?>
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">
    <h2 align="center">Login</h2>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="Email ID">Email ID</label>
        <input class="form-control" type="email" name="email" value="" placeholder="Email ID">
      </div>
      <div class="form-group">
        <label for="Password">Password</label>
        <input class="form-control" type="password" name="password" value="" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block" name="button">LOGIN</button>
    </form>
  </div>
</body>

</html>
