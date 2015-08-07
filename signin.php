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
  <script src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript">
    function parseURLParams(url) {
      var queryStart = url.indexOf("?") + 1,
        queryEnd = url.indexOf("#") + 1 || url.length + 1,
        query = url.slice(queryStart, queryEnd - 1),
        pairs = query.replace(/\+/g, " ").split("&"),
        parms = {},
        i, n, v, nv;

      if (query === url || query === "") {
        return;
      }

      for (i = 0; i < pairs.length; i++) {
        nv = pairs[i].split("=");
        n = decodeURIComponent(nv[0]);
        v = decodeURIComponent(nv[1]);

        if (!parms.hasOwnProperty(n)) {
          parms[n] = [];
        }

        parms[n].push(nv.length === 2 ? v : null);
      }
      return parms;
    }
    var url = window.location.href;
    var result = parseURLParams(url);
    $(document).ready(function() {
      if (result.alert != '') {
        alert(result.alert);
      }
    });
  </script>
</body>

</html>
