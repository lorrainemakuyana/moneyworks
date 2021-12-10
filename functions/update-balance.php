<?php
session_start(); 

require("./database/controllers/input_controller.php"); 

$username = $_SESSION['username'];

if(isset($_POST['addbalance'])) {
  $amount = $_POST['amount'];
  $current_balance = getBalance($username)->fetch_array(MYSQLI_NUM);
  $current_balance = $current_balance[0];
  $new_balance = $current_balance + $amount;
  $results = updateBalance($username, $new_balance);
 
if($results) {
    ?> 
    <script> alert("Balance updated successfully.") </script>
    <?php
    header("location: ./dashboard.php");
} else {
    ?> 
    <script> alert("Balance update failed. Please try again.") </script>
    <?php
    header("location: ./balance.php");
}
}


?>

