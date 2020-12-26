<?php
echo "<pre>";
print_r($_POST);
//die("form_submit.php line no 4");
echo "</pre>";

$fn=$_POST['fname'];
$ln=$_POST['lname'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$course=$_POST['stream'];
$subject=implode(',' , $_POST['subjects']);

//print_r($subject); die();
$comment=$_POST['comments'];

//print_r($_POST);

//CREATE DATABASE CONNECTION
$servername='localhost';
$username='root';
$password='';
$dbname='junaid_db';

$conn = new mysqli($servername, $username, $password, $dbname);

//CHECK CONNECTION
if(!$conn){
    die("connection failed: " . mysqli_connect_error());
}
echo 'well done!';

$sql="INSERT INTO test_table (id, fname, lname, addrs, gender, stream, subjects ,comments) VALUES (NULL, '$fn', '$ln', '$address', '$gender', '$course', '$subject', '$comment')";

if($conn->query($sql)===TRUE){
    echo "new record added successfully";
}
else{
    echo "Error: ".$sql."</br>".$conn->error;
}


?>