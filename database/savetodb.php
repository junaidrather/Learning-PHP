<a href="./">Go Back</a>
<?php

//print_r($_POST);

$fn = $_POST['fn'];
$ln = $_POST['ln'];
$age =$_POST['age'];

//echo "Hi ".$fn."!<br>";
//echo "Your Last Name is ".$ln."<br>";

//Lets us now connecto to database

$servername = "127.0.0.1";
$username = "root"; // junaid
$password = ""; // junaid
$dbname = "junaid_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";

$sql = "INSERT INTO `user` (`id`, `fn`, `ln`, `age`) VALUES (NULL, '$fn', '$ln', '$age')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


// // Fetching Data from the database

// $sql = "SELECT * FROM user";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["fn"]. " " . $row["ln"]." Age: " . $row["age"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

$conn->close();