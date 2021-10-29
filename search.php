<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
$fname = $_POST["firstname"];
$phone = $_POST["phone"];
$mail = $_POST["email"];
$sql = "SELECT * FROM 272_data.users WHERE firstname LIKE '%$fname%' AND homephone LIKE '%$phone%' AND email LIKE '%$mail%'";


$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "First Name: " . $row["firstname"]. " Last Name: " . $row["lastname"]. " Email: " . $row["email"];
      echo " Address: " . $row["homeaddress"]. " Home Phone : " . $row["homephone"]. " Mobile: " . $row["cellphone"]. "<br>";
    }
  }
else{
    echo "Error in ".$sql."<br>".$link->error;
}
// Close connection
mysqli_close($link);
?>
