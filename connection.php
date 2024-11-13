<?php
// Database connection details
$host = "localhost"; // Assuming your database is on localhost
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "tourism"; // Your MySQL database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$tour = $_POST['tour'];
$tour_date = $_POST['tourdate'];
$participants = $_POST['no_participents'];

// to check query
$query = "INSERT INTO  resistration (name,email,phone,tour,tourdate,no_participents) VALUES ('$name','$email','$phone','$tour','$tourdate','$no_participents')";

$data =  mysqli_query($conn,$query);

if($data)
{
  echo "Data inserted into Database";
}

else
{
    echo "FAILED";
}

}
else
{
 echo "<script>alert(' Fill the form First ') ; </script>";


}

?>