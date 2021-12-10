<?php
session_start(); 

require("./database/controllers/input_controller.php"); 

$username = $_SESSION['username'];

if(isset($_POST['addinvestment'])) {

  $description = $_POST['description'];
  $type = $_POST['type'];
  $amount = $_POST['amount']; 
  $profit = $_POST['profit']; 
  $results = addInvestment($username, $type, $description, $profit, $amount); 
  if($results) {
    ?> 
    <script> alert("Investment added successfully.") </script>
    <?php
    header("location: ./dashboard.php");
  } else {
    ?> 
    <script> alert("Adding investment failed. Please try again.") </script>
    <?php
    header("location: ./investment.php");
  }

}

?>