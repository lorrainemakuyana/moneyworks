<?php
require_once (dirname(__FILE__)).'../../settings/db_class.php';

class Moneyworks extends Database {

    public function addExpense($username, $description, $amount, $category) {
        $sql = "INSERT INTO `expenses` (`username`, `description`, `amount`, `category`) VALUES ('$username', '$description', '$amount', '$category')";
        return $this->db_query($sql);
    }

    public function getExpense($id) {
        $sql = "SELECT amount FROM expenses WHERE `id`='$id'"; 
        return $this->db_query($sql);
    }

    public function deleteExpense($id) {
        $sql = "DELETE FROM `expenses` WHERE id = '$id'"; 
        return $this->db_query($sql); 
    }

    public function getUserExpenses($username) {
        $sql = "SELECT * FROM expenses WHERE `username`='$username'";
        return $this->db_query($sql); 
    }

    public function addInvestment($username, $type, $description, $profit, $amount) {
        $sql = "INSERT INTO `investments` (`username`, `type`, `description`, `profit`, `amount`) VALUES ('$username', '$type', '$description', '$profit', '$amount')"; 
        return $this->db_query($sql);
    }

    public function deleteInvestment($id) {
        $sql = "DELETE FROM `investments` WHERE `id`='$id'"; 
        return $this->db_query($sql); 
    }

    public function getUserInvestments($username) {
        $sql = "SELECT * FROM investments WHERE `username`='$username'";
        return $this->db_query($sql); 
    }

    public function updateBalance($username, $balance) {
        $sql = "UPDATE users SET `balance`='$balance' WHERE `username`='$username'"; 
        return $this->db_query($sql);
    }

    public function getBalance($username) {
        $sql = "SELECT `balance` FROM users WHERE `username`='$username'";
        return $this->db_query($sql);
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

    public function getUserInfo($username) {
        $sql = "SELECT * FROM users WHERE `username`='$username'"; 
        return $this->db_query($sql);
    }

    public function changePassword($username, $newpassword) {
        $sql = "UPDATE users SET `password`='$newpassword' WHERE `username`='$username'"; 
        return $this->db_query($sql);
    }

    public function getAllUsersInvestments() {
        $sql = "SELECT `profit` FROM investments";
        return $this->db_query($sql);
    }
}

?>