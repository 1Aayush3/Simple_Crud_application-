<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<title>Form Validation</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $passwordErr = "";
$name = $email = $gender = $password= "";

//trim data in suitable form
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


//check if the field are empty or not
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";
  } else {
        $fname = test_input($_POST["fname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
        $fnameErr = "Only letters and white space allowed";
        }
        
    }

    if (empty($_POST["lname"])) {
        $lnameErr = "Name is required";
      } else {
            $lname = test_input($_POST["lname"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
            $lnameErr = "Only letters and white space allowed";
            }
           
        }  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
   
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
         } else {
            $password = test_input($_POST["password"]);
            }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


  if(isset($genderErr) || isset($fnameErr)|| isset($lnameErr)||isset($emailErr)||isset($password)){
   include 'insert.php'; 
  }
}

?>

<div class="container">
<div class="row">
<div class="col-sm-10">
<div class="text-center">
<div style="background:#D3D3D3"}>

<h2>Form:</h2>

<?php
include'form.php';
?>
<button><a href="read.php">Read</a></button> 

</div>
</div>
</div>
</div>
</div>

</body>
</html>