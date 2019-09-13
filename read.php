<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<title> List </title>
</head>
<body>



<?php
include_once'config.php';
//Query against the database to take all values
$sql = "SELECT * FROM form_validation";
$result = $link->query($sql);

?>

<Header style="background:black; text-align: center; color: white;"><b><h1>Lists<h1></b>
</Header>
<table style="background:#D3D3D3" class="table table-bordered">
<thead>
    <tr>        
        <td> <b>First Name</b></td>
        <td> <b>Last Name</b></td>
        <td> <b>Email</b></td>
        <td> <b>DOB</b></td>
        <td> <b>Password</b></td>
        <td> <b>Gender</b></td>
        <td> <b>Action</b></td>
     </tr>
</thead>

<tbody>
<?php
    while($row = $result->fetch_assoc()) {
       echo ("<tr>
        <td>".$row['first_name']."</td>
        <td>".$row['last_name']."</td>
        <td>".$row['Email']."</td>
        <td>".$row['DOB']."</td>
        <td>".$row['Password']."</td>
        <td>" .$row['Gender']."</td>
        <td><a href='edit.php?id=".$row['id']."'><button>UPDATE</button></a> |
            <a onClick=\"return confirm('Are you sure you want to delete?')\"  href=\"remove.php?id=$row[id]\" ><button>REMOVE</button></a>
            
        </td>
        </tr>");
    }
?>

</tbody>
</table>
<a href="index.php">Add Records</a>
</body>
</html>
