<?php
include_once'config.php';
 //Escape user inputs for security
// $fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
// $lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
// $email = mysqli_real_escape_string($link, $_REQUEST['email']);
// $date = mysqli_real_escape_string($link, $_REQUEST['date']);
// $gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
// $password = mysqli_real_escape_string($link, $_REQUEST['password']);

 // Attempt insert query execution
$sql = "INSERT INTO form_validation (first_name, last_name, Email, DOB, Gender, Password) VALUES (?,?,?,?,?,?)";
if($stmt=mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt,"ssssss", $fname, $lname, $email, $date, $gender, $password);
    
$fname =$_REQUEST['fname'];
$lname =$_REQUEST['lname'];
$email = $_REQUEST['email'];
$date = $_REQUEST['date'];
$gender =$_REQUEST['gender'];
$password = $_REQUEST['password'];
}
//Check Record insertion
if(mysqli_stmt_execute($stmt)){
   echo "Records added successfully.";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
  
// Close statement
mysqli_stmt_close($stmt);
// Close connection
mysqli_close($link);
?>