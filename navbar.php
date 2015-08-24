<head>
<style>
li a.drop-li:hover
{
	background-color:black;
	color:white;
}
li a.drop-li
{
	color:white;
}


</style>
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-example">
        <i class="fa fa-bars" style="color: white;"></i>
        <span class="sr-only">Toggle Navigation</span>
        <span class="sr-only"></span>
        <span class="sr-only"></span>
        <span class="sr-only"></span>
      </button>
      <a href="./index.php" class="navbar-brand">
        <!-- <img src="img/home.png" alt="" /> -->
        <i class="fa fa-home"></i>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-example">
      <ul class="nav navbar-nav">
        <li><a href="./sac.php">STUDENTS' ALUMNI CELL</a></li>
        <li><a href="./gallery.php">GALLERY</a></li>
        <li><a href="./lastMeet.php">LAST MEET</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SPONSORS <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#222 ; ">
            <li><a href="./sponsors2012.php" class="drop-li">2012</a></li>
            <li><a href="./sponsors2013.php" class="drop-li">2013</a></li>
            <li><a href="./sponsors2014.php" class="drop-li">2014</a></li>
            <li><a href="./sponsors2015.php" class="drop-li">2015</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">HELP</a></li> -->
        <li><a href="./contact.php">CONTACT US</a></li>
				<li><a href="./signup.php">REGISTER</a></li>
        <?php
        if (isset($_SESSION["email"])) {
          echo "<li><a href='./index.php'>Logged in as ".$_SESSION['email']."</a></li>";
          echo "<li><a href='./logout.php'>LOGOUT</a></li>";
        } else {
          echo "<li><a href='./signin.php?err='>LOGIN</a></li>";
        }
        ?>
      </ul>
    </div>
  </div>
</nav>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
