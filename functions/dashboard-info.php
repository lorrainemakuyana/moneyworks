<?php

  require("functions.php");

  $username = $_GET['username'];
  
  $totalExp = getTotalExpenses($username); 
  $totalInv = getTotalInvestments($username); 
  $totalBal = getBalance($username)->fetch_array(MYSQLI_NUM);
  $totalBal = $totalBal[0];

  $avgDailyInv = round(getAllInvestments(), 2, PHP_ROUND_HALF_EVEN);; 

  if (isset($_GET['expToDelete'])) {
    $id = $_GET['expToDelete']; 
    $cost = getExpense($id)->fetch_array(MYSQLI_NUM);
    $cost = $cost[0]; 
    $balance = getBalance($username)->fetch_array(MYSQLI_NUM); 
    $balance = $balance[0];
    $balance += $cost; 
    $results = deleteExpense($id); 
    if ($results) {
      updateBalance($username, $balance);
      header("location: ./dashboard.php?username=$username");
    } 
  }

  if (isset($_GET['invToDelete'])) {
    $id = $_GET['invToDelete']; 
    $results = deleteInvestment($id); 
    if ($results) {
      header("location: ./dashboard.php?username=$username");
    } 
  }

?>