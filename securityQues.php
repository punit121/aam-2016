<?php
session_start();
$email = $_POST["email"];
$_SESSION["forgotPasswordEmail"] = $email;

include 'connection.php';
$sql = "SELECT email, dob FROM users";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc) {
    if ($email == $row["email"]) {
      $dob = $row["dob"];
    } else {
      echo "No user registered with this email";
      header('Location: ./forgotPassword.php?alert=No user registered with this email');
    }
  }
}
$rand1 = rand(1950,1999)."-".rand(1,12)."-".rand(1,30);
$rand2 = rand(1950,1999)."-".rand(1,12)."-".rand(1,30);
$rand3 = rand(1950,1999)."-".rand(1,12)."-".rand(1,30);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>13th Annual Alumni Meet &middot; Security Question</title>
    <?php include 'topHead.php'; ?>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <div class="jumbotron" align="center">
      <h2>Security Question</h2>
      <h4>What is your Date of Birth ??</h4>
      <form class="" action="index.html" method="post">
        <div class="checkbox">
          <input type="checkbox" name="name" value=""> <?php echo $rand1; ?>
        </div>
        <div class="checkbox">
          <input type="checkbox" name="name" value=""> <?php echo $rand2; ?>
        </div>
        <div class="checkbox">
          <input type="checkbox" name="name" value=""> <?php //echo "$dob"; ?>
        </div>
        <div class="checkbox">
          <input type="checkbox" name="name" value=""> <?php echo $rand3; ?>
        </div>
        <button class="btn btn-primary" type="submit" name="button">Submit</button>
      </form>
    </div>
  </body>
</html>
