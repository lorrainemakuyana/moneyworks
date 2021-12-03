<?php

require("./database/controllers/input_controller.php"); 

$username = $_GET['username'];

if(isset($_POST['addexpense'])) {
  $description = $_POST['description'];
  $category = $_POST['category'];
  $cost = $_POST['cost']; 
  $results = addExpense($username, $description, $cost, $category); 
  if($results) {
    $current_balance = getBalance($username)->fetch_array(MYSQLI_NUM);
    $current_balance = $current_balance[0]; 
    $new_balance = $current_balance - $cost; 
    $result2 = updateBalance($username, $new_balance); 
    if ($result2) {
      ?> 
      <script> alert("Expense added and balance updated successfully.") </script>
      <?php
      header("location: ./dashboard.php?username=$username");
    } else {
      ?> 
      <script> alert("Balance update failed. Please try again.") </script>
      <?php
      header("location: ./expense.php?username=$username");
    }
  } else {
    ?> 
    <script> alert("Adding expense failed. Please try again.") </script>
    <?php
    header("location: ./expense.php?username=$username");
  }

}

?>