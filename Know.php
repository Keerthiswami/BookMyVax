<?php
$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$emailid= $_POST["emailid"];
$mobile = $_POST["mobile"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$date = $_POST["date"];
$vaccine = $_POST["Vaccine"];
$hospital = $_POST["hospital"];
//database connection
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "vaccine";
$conn = new mysqli($servername, $username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed : ".$conn->connect_error);
}
$sql="SELECT * from bookvaccine ";
$result = $conn->query($sql);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo "Details: " .
                $row["Fn"]. " - Name: " .
                $row["Ln"]. " | City: " . 
                $row["mail"]. " | Age: " . 
                $row["mobile"]. "<br>";
                $row["dob"]. "<br>";
                $row["mobile"]. "<br>";
                $row["mobile"]. "<br>";
                $row["mobile"]. "<br>";
                $row["mobile"]. "<br>";

        }
    } 
else{
    echo "error:" .$sql . "<br>".$conn->error;
}
    $conn->close();

?>