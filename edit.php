<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// including the database connection file
include_once'config.php';

 
if(isset($_POST['submit']))
{    
    
    $id = $_POST['id'];
    
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $date=$_POST['date'];
    $gender=$_POST['gender'];    
    
    // checking empty fields
    if(empty($fname) || empty($lname) || empty($email)|| empty($password)|| empty($date)|| empty($gender)) {            
        if(empty($fname)) {
            echo "<font color='red'>First Name field is empty.</font><br/>";
        }
        
        if(empty($lname)) {
            echo "<font color='red'>Last Name field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }  
        if(empty($password)) {
          echo "<font color='red'>Password field is empty.</font><br/>";
      }        
      if(empty($date)) {
        echo "<font color='red'>DOB field is empty.</font><br/>";
    }        
    if(empty($gender)) {
      echo "<font color='red'>Gender field is empty.</font><br/>";
  }              
    } else {    
        //updating the table
        $result = mysqli_query($link, "UPDATE form_validation SET first_name='$fname',last_name='$lname',DOB='$date',email='$email',Password='$password',Gender='$gender' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: read.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id

$result = mysqli_query($link, "SELECT * FROM form_validation WHERE id=$id");
    
while($res = mysqli_fetch_array($result))
{
    $fname = $res['first_name'];
    $lname = $res['last_name'];
    $date = $res['DOB'];
    $gender = $res['Gender'];
    $password = $res['Password'];
    $email = $res['Email'];
}

?> 
<html>
<head>    
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Edit Data</title>
</head>
 
<body>
<div class="container">
<div class="row">
<div class="col-sm-10">
<div class="text-center">
<div style="background:#D3D3D3"}>
<?php
include'form.php';
?>
</div>
</div>
</div>
</div>
</div>
</body>
</html>