<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "training");
// Check connection
if($link === false){
 die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Check if submit button is clicked
if(isset($_POST['submit'])){
	$first_name = $_POST['first_name'];
  $last_name  = $_POST['last_name'];

  // attempt insert query execution
  $sql = "INSERT INTO users (first_name, last_name) VALUES ('$first_name', '$last_name')";
  if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
}
// close connection
mysqli_close($link);
?>
