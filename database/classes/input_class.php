<?php
require_once (dirname(__FILE__)).'../../settings/db_class.php';

class Moneyworks extends Database {

    public function addExpense($user_id, $description, $amount, $category) {
        $sql = "INSERT INTO `expenses` (`user_id`, `description`, `amount`, `category`) VALUES ('$user_id', '$description', '$amount', '$category')";
        return $this->db_query($sql);
    }

    public function updateExpense($id, $description, $amount, $category) {
        $sql = "UPDATE TABLE expenses SET `descriptin`='$description', `amount`='$amount', `category`='$category' WHERE `id`='$id";
        return $this->db_query($sql);  
    }

    public function removeExpense($id) {
        $sql = "DELETE FROM `expenses` WHERE id = '$id'"; 
        return $this->db_query($sql); 
    }

    public function addInvestment($user_id, $type, $profit, $loss, $daily_earning, $end_date) {
        $sql = "INSERT INTO `investments` (`user_id`, `type`, `profit`, `loss`, `daily_earning`, `end_date`) VALUES ('$user_id', '$type', '$profit', '$loss', '$daily_earning', '$end_date')";
        return $this->db_query($sql);
    }

    public function deleteInvestment($id) {
        $sql = "DELETE FROM `investments` WHERE `id`='$id'"; 
        return $this->db_query($sql); 
    }

    public function updateInvestment($id, $type, $profit, $loss, $daily_earning, $end_date) {
        $sql = "UPDATE TABLE `investments` SET `type`='$type', `profit_percentage`='$profit', `loss_percentage`='$loss', `daily_earning`='$daily_earning', `end_date`='$end_date' WHERE `id`='$id'"; 
        return $this->db_query($sql); 
    }

    public function addBalance($id, $amount) {
        // get existing balance
        $sql_bal = "SELECT `balance` FROM users WHERE `id`='$id'";
        $results = $this->db_query($sql_bal); 
        if ($results) {
            $new_balance = $amount + $results; 
            $sql = "UPDATE TABLE users SET `balance`='$new_balance'"; 
            return $this->db_query($sql); 
        }
    }

    public function addIncome($id, $amount, $description) {
        $res = addBalance($id, $amount);
        if ($res) {
            $sql = "INSERT INTO income (`user_id`, `description`, `amount`) VALUES ('$id', '$description', '$amount')"; 
            return $this->db_query($sql);
        }
    }

    public function addUser($email, $username, $password) {
        $sql = "INSERT INTO users (`username`, `password`, `balance`, `email_address`) VALUES ('$username', '$password', 0, '$email');";
        return $this->db_query($sql); 
    }

    public function validateUserCredentials($username, $email) {
        $sql = "SELECT * FROM users WHERE `username`='$username' OR `email_address`='$email' LIMIT 1"; 
        return $this->db_query($sql);
    }

    public function login($username, $password) {
        $sql = "SELECT * FROM users WHERE `username`='$username' AND `password`='$password'"; 
        return $this->db_query($sql);
    }
}

?>