<?php 
  require("./database/controllers/input_controller.php"); 

  function registerUser($username, $email, $password) {
    $res = addUser($email, $username, $password); 
    if ($res) {
      header("location: ./login.php"); 
    } else {
      echo "Registration failed, please try again";
    }
  }
 
  if(isset($_POST['register'])) {
    $username = $_POST['username']; 
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $validateDetails = validateUserCredentials($username, $email)->fetch_array(MYSQLI_ASSOC); 
    if (!$validateDetails) {
      registerUser($username, $email, $password);
    } else {
    ?> 
      <script> alert("Username or Email already exists. Please use different credentials.") </script>
    <?php
    }
  }

?>