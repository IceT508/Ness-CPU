<?php
 session_start();

  echo "Logout Successfully ";
  // logs out of session 
  session_destroy();   
  header("Location: index.html");
?>
