
<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include_once'config.php';


//Delete from database

$sql = "DELETE FROM form_validation WHERE id=".$_GET['id'];
$result = $link->query($sql);
header("Location: read.php")

?>
 