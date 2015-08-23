<?php session_start(); ?>
<html>

<head>
  <title>13th Annual Alumni Meet &middot; Home</title>
  <?php include 'topHead.php'; ?>
</head>

<body>
  <?php include "navbar.php"; ?>
  <!-- <hr> -->

  <div class="container">
    <div class="col-md-6" id="verticalLine">
      <img src="img/logo-square.jpg" alt="" class="logo" />
    </div>

    <div class="col-md-6">
      <div class="form-group" id="form">
        <form action="signup.php" method="get">
          <div class="form-group">
            <input class="form-control" type="text" name="name" value="" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="email" value="" placeholder="Email ID">
          </div>
          <button type="submit" name="button" class="btn btn-success btn-block">REGISTER NOW</button>
        </form>
      </div>

      <div class="" align="justify">
        <img src="img/a.png" alt="" id="quotes" />
        <div class="container-fluid">
          <div align="center">
            <b>Back to the Roots</b>
          </div>
          <br> The years spent at KGP truly moulds and shapes our personality. The unconditional love we share for KGP, our obsession with Hall, Department and Society stays with us as we wander from personal to professional life even after graduating from
          our Alma Mater. Most importantly the numerous activities at KGP we were involved in and and the friends we made for life made our stay at KGP memorable.
          <br> We strongly believe that KGP has played an important role in helping us achieve our goals. Needless to say, whatever we are it is because of the support by our Alma Mater and connections we made here.It's time to reunite with your own KGP and
          relive the carefree times that were left behind.
          <br> Bathe in the surreal reincarnation of the impeccable past as your buddies from around the world join you in you ride to the past. So, let's board the train of memories in search of our roots - Back to the Roots and relive the good old but golden
          days.
          <br>
          <div align="center">
            Come let's find our roots!
          </div>
        </div>
        <img src="img/b.png" alt="" id="quotes" class="pull-right" />
        <!-- <div class="component"></div> -->
      </div>
    </div>
  </div>
</body>
<script src="js/typed.min.js"></script>
<script src="js/main.js"></script>

</html>
