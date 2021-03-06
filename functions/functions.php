<?php
    require("./database/controllers/input_controller.php"); 

    function getExpenses($username) {
        $expenses = getUserExpenses($username); 
        if($expenses) {
            $exp = $expenses->fetch_array(MYSQLI_NUM); 
            while ($exp) {
                $id = $exp[0]; 
                $description = $exp[2]; 
                $amount = $exp[3];
                $date = $exp[5];
                echo "<tr>";
                echo "<td> $date </td>";
                echo "<td> $description </td>";
                echo "<td> $amount </td>";
                echo "<td> <a class='btn btn-primary btn-sm' href='dashboard.php?expToDelete=$id'> Delete </a> </td>";
                echo "</tr>";
                $exp = $expenses->fetch_array(MYSQLI_NUM);
            }
        } 
    }

    function getTotalExpenses($username) {
        $expenses = getUserExpenses($username); 
        $totalExp = 0; 
        if($expenses) {
            $exp = $expenses->fetch_array(MYSQLI_NUM); 
            while($exp) {
                $amount = $exp[3];
                $totalExp += $amount;
                $exp = $expenses->fetch_array(MYSQLI_NUM);
            }
            return $totalExp; 
        }
    }

    function getInvestments($username) {
        $investments = getUserInvestments($username); 
        if($investments) {
            $inv = $investments->fetch_array(MYSQLI_NUM); 
            while ($inv) {
                $id = $inv[0]; 
                $date = $inv[2];
                $description = $inv[4]; 
                $profit_perc = $inv[5];
                $amount = $inv[6];
                $daily_earning = ($profit_perc / 100) * $amount;
                echo "<tr>";
                echo "<td> $date </td>";
                echo "<td> $description </td>";
                echo "<td> $daily_earning </td>";
                echo "<td> <a class='btn btn-primary btn-sm' href='dashboard.php?invToDelete=$id'> Delete </a> </td>";
                echo "</tr>";
                $inv = $investments->fetch_array(MYSQLI_NUM);
            }
        } 
    }

    function getTotalInvestments($username) {
        $investments = getUserInvestments($username); 
        $totalInv = 0; 
        if($investments) {
            $inv = $investments->fetch_array(MYSQLI_NUM); 
            while ($inv) {
                $profit_perc = $inv[5];
                $amount = $inv[6];
                $daily_earning = ($profit_perc / 100) * $amount;
                $totalInv += $daily_earning;
                $inv = $investments->fetch_array(MYSQLI_NUM);
            }
            return $totalInv; 
        } return 0;
    }

    function getAllInvestments() {
        $allInvestments = getAllUsersInvestments();
        $total = 0; 
        if($allInvestments) {
            $invstmt = $allInvestments->fetch_array(MYSQLI_NUM); 
            while ($invstmt) {
                $profit = $invstmt[0];
                $total += $profit;
                $invstmt = $allInvestments->fetch_array(MYSQLI_NUM);
            }
            return $total / mysqli_num_rows($allInvestments); 
        } return 0;
    }
    
?>