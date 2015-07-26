<?php
$DB_NAME = getenv('DB_NAME');
$DB_HOST = getenv('DB_HOST');
$DB_USER = getenv('DB_USERNAME');
$DB_PASS = getenv('DB_PASSWORD');

$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];
$zipCode = $_POST["zipCode"];
$mobile = $_POST["mobile"];
$dob = $_POST["dob"];
$marital = $_POST["marital"];
$industry = $_POST["industry"];
$profession = $_POST["profession"];
$orgName = $_POST["orgName"];
$designation = $_POST["designation"];
$work_city = $_POST["work_city"];
$work_state = $_POST["work_state"];
$work_country = $_POST["work_country"];
$work_zipCode = $_POST["work_zipCode"];
$work_address = $_POST["work_address"];
$rollNum = $_POST["rollNum"];
$joinYear = $_POST["joinYear"];
$degree = $_POST["degree"];
$department = $_POST["department"];
$hall = $_POST["hall"];
$graduatingYear = $_POST["graduatingYear"];

echo "$email : email<br>";
echo "$password : password<br>";
echo "$name : name<br>";
echo "$address : address<br>";
echo "$city : city<br>";
echo "$state : state<br>";
echo "$country : country<br>";
echo "$zipCode : zipCode<br>";
echo "$mobile : mobile<br>";
echo "$dob : dob<br>";
echo "$marital : marital<br>";
echo "$industry : industry<br>";
echo "$profession : profession<br>";
echo "$orgName : orgName<br>";
echo "$designation : designation<br>";
echo "$work_city : work_city<br>";
echo "$work_state : work_state<br>";
echo "$work_country : work_country<br>";
echo "$work_zipCode : work_zipCode<br>";
echo "$work_address : work_address<br>";
echo "$rollNum : rollNum<br>";
echo "$joinYear : joinYear<br>";
echo "$degree : degree<br>";
echo "$department : department<br>";
echo "$hall : hall<br>";
echo "$graduatingYear : graduatingYear<br>";

$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS);

if ($connection->connect_error) {
  die("Connecton failed: ".$connection->connect_error);
}
else {
  echo "Connection Successful<br>";
}

$sql = "INSERT INTO users (email, name, password) VALUES ($email, $name, $password)";

if ($connection->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: ".$sql. "<br>".$connection->error;
}

$connection->close();
 ?>
