<?php session_start(); ?>
<html>

<head>
  <title>13th Annual Alumni Meet &middot; Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/logo-square.png" media="screen">
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" href="css/main.css" media="screen">
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">
    <h2 align="center">Login</h2>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="Email Id">Email Id</label>
        <input class="form-control" type="email" name="email" value="" placeholder="Email Id">
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
