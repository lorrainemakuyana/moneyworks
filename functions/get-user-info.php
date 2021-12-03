<?php

require("./database/controllers/input_controller.php"); 

$username = $_GET['username'];

$details = getUserInfo($username)->fetch_array(MYSQLI_NUM); 
$balance = $details[3];
$email = $details[4];

if(isset($_POST['changepassword'])) {

  $password = $_POST['password']; 
  if (login($username, $password)) {
    $newpassword = $_POST['renewpassword']; 
    $result = changePassword($username, $newpassword); 
    if ($result) {
      echo '<script> alert("You have successfully changed your password.") </script>'; 
    } else {
      echo '<script> alert("Change password unsuccessful....") </script>'; 
    }
  } else {
    echo '<script> alert("cant change this what?") </script>'; 
  }

}
?>