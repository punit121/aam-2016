<?php session_start(); ?>
<html>

<head>
  <title>13th Annual Alumni Meet &middot; Registered!</title>
  <?php include 'topHead.php'; ?>
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container-fluid">
    <div class="jumbotron">
      <div class="container">
        <div class="container-fluid">
          <div align="center">
            <h2>Successfully registered!</h2>
          </div>
          <p>
            You have successfully registered for the 13th Annual Alumni Meet. We will send you an email when you need to come back here!
          </p>
          <div class="col-md-6">
            <a href="./login.php" class="btn btn-success btn-block">Click here to login</a>
          </div>
          <div class="col-md-6">
            <a href="./index.php" class="btn btn-success btn-block">Visit Home</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
