<?php 
  session_start();
  
  require("./database/controllers/input_controller.php");  

  if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $_SESSION['username'] = $username; 
    $password = $_POST['password']; 
    $isUser = login($username, $password)->fetch_array(MYSQLI_ASSOC); 
    if ($isUser) {
      header("location: ./dashboard.php");
    } else {
    ?> 
      <script> alert("Wrong credentials. Please try again") </script>
    <?php
    }
  }

?>