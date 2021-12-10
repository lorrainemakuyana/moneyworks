<?php
session_start(); 

require("./database/controllers/input_controller.php"); 

$username = $_SESSION['username'];

if(isset($_POST['addexpense'])) {
  $description = $_POST['description'];
  $category = $_POST['category'];
  $cost = $_POST['cost']; 

  // Check user's balance first 
  $current_balance = getBalance($username)->fetch_array(MYSQLI_NUM);
  if ($current_balance[0] == 0) {
      echo '<script> alert("You have $0. Please update your balance first!")</script>';
      header("location: ./balance.php");
  } 
  
  else if ($current_balance[0] - $cost < 0) {
    echo '<script> alert("You cannot spend more than you have. Please update your balance first!")</script>';
    header("location: ./balance.php");
  }
  
  else {
    $results = addExpense($username, $description, $cost, $category); 
    if($results) {
      $new_balance = $current_balance[0] - $cost; 
      $result2 = updateBalance($username, $new_balance); 
      if ($result2) {
        ?> 
        <script> alert("Expense added and balance updated successfully.") </script>
        <?php
        header("location: ./dashboard.php");
      } else {
        ?> 
        <script> alert("Balance update failed. Please try again.") </script>
        <?php
        header("location: ./expense.php");
      }
    } else {
      ?> 
      <script> alert("Adding expense failed. Please try again.") </script>
      <?php
      header("location: ./expense.php");
    }
  }
}

?>