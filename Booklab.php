<?php
$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$emailid= $_POST["email"];
$mobile = $_POST["mobile"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$date = $_POST["date"];
$testname = $_POST["test"];
$lab = $_POST["lab"];

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
$sql="INSERT INTO booklab(firstname,lastname,emailid,mobile,dob,gender,date,testname,lab)
    VALUES('$firstName','$lastName','$emailid','$mobile','$dob','$gender','$date','$testname','$lab')";
    $sql_run=mysqli_query($conn,$sql);
if($sql_run){
    echo "Registered Successfully";
}
else{
    echo "error:" .$sql . "<br>".$conn->error;
}
    $conn->close();

?>