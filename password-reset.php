<html>
<head>
  <title>13th Annual Alumni Meet &middot; Login</title>
  <?php include 'topHead.php'; ?>
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">
  	<h2 align="center">Reset Password</h2>
  	<form action="" method="post">
      <div class="form-group">
        <label for="Email ID">Email ID</label>
        <input class="form-control" type="email" name="email" value="" placeholder="Enter Email ID to reset your password">
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block" name="button">SUBMIT</button>
    </form>
  </div>
</body>

</html>

<?php
include 'connection.php';
if(isset($_POST['button'])) {
	$mail=$_POST['email'];
	$password="newPasswordString";		//Created a random password string
	$q="UPDATE users SET password=$password WHERE email=$mail";
	$result=$connection->query($q);
	if($result!=FALSE) {
		echo "<center><font size=5 color=green>Your Password has been reset, you will receive a mail after some time.</font></center>";
	}
	else echo "<center><font size=5 color=red>Password Reset failed, please check email or try again after some time.</font></center>";

	$emailfile = fopen("email_list.txt", "a");
	fwrite($emailfile,$mail.", \n");
	fclose($emailfile);
}

?>