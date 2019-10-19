<?php 
include 'connect.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$sql = "INSERT INTO student (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>