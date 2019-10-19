<?php 
include 'connect.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$id = $_POST['id'];
$sql = "UPDATE student SET lastname='$lastname',firstname='$firstname',email='$email' WHERE id=$id";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>