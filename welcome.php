<?php
 session_start();
 if ($_SESSION["email"] == "") {
   header('Location: ./signin.php');
   exit();
   }
 if($_SESSION['form_submit']!=TRUE) {
 	header('Location:acco-travel-form.php');
 }
 ?>

<html>

<head>
  <title>13th Annual Alumni Meet &middot; Logged in!</title>
  <?php include 'topHead.php'; ?>
</head>

<body>
	<?php include "navbar.php"; ?>
	<div class="container-fluid">
		<div class="jumbotron">
			<div class="container">
				<div class="container-fluid">
					<div align="center">
						<h2 style="color:green;">Thank You, Your Details have been Stored Successfully.</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
