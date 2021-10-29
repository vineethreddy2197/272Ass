<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "phpmyadmin", "root");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
 
$sql = "INSERT INTO 272_data.users VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."','".$_POST["address"]."','".$_POST["hphone"]."','".$_POST["cphone"]."')";


$result = $link->query($sql);

// Close connection
mysqli_close($link);
?>
