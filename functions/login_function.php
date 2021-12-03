<?php 
  require("./database/controllers/input_controller.php");  
 
  if(isset($_POST['login'])) {
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $isUser = login($username, $password)->fetch_array(MYSQLI_ASSOC); 
    if ($isUser) {
      header("location: ./dashboard.php?username=$username");
    } else {
    ?> 
      <script> alert("Wrong credentials. Please try again") </script>
    <?php
    }
  }

?>