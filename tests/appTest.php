<?php

    use PHPUnit\Framework\TestCase;
    require_once (dirname(__FILE__)).'./../database/controllers/input_controller.php';

    class appTest extends TestCase{

        public function testRegister() {
            $email = "testCase@phpunit.com"; 
            $username = "test"; 
            $password = "test"; 
            $response = addUser($email, $username, $password); 
            $this->assertTrue($response);
        }
        
        public function testGetUserInfo() {
            $username = "makuyana"; 
            $response = getUserInfo($username)->fetch_array(MYSQLI_NUM); 
            $this->assertIsArray($response); 
        }

        public function testUpdateBalance() {
            $username = "makuyana"; 
            $new_balance = 500;
            $response = updateBalance($username, $new_balance);
            $this->assertTrue($response); 
        }

        public function testAddExpense() {
            $username = "makuyana"; 
            $description = "Test add expense";
            $cost = 0; 
            $category = "Miscellaneous"; 
            $response = addExpense($username, $description, $cost, $category); 
            $this->assertTrue($response);
        }

        public function testGetUserExpenses() {
            $username = "makuyana"; 
            $response = getUserExpenses($username)->fetch_array(MYSQLI_NUM); 
            $this->assertIsArray($response); 
        }

        public function testDeleteExpense() {
            $id = 1; 
            $response = deleteExpense($id); 
            $this->assertTrue($response); 
        }

        public function testAddInvestment() {
            $username = "makuyana"; 
            $type = "Stocks"; 
            $description = "Test add investment";
            $profit = 2;
            $amount = 10; 
            $response = addInvestment($username, $type, $description, $profit, $amount);
            $this->assertTrue($response);
        }

        public function testGetUserInvestments() {
            $username = "makuyana"; 
            $response = getUserInvestments($username)->fetch_array(MYSQLI_NUM); 
            $this->assertIsArray($response);
        }

        public function testDeleteInvestment() {
            $id = 1; 
            $response = deleteInvestment($id); 
            $this->assertTrue($response);
        }

        public function testChangePassword() {
            $username = "makuyana"; 
            $newpassword = "1234";
            $response = changePassword($username, $newpassword);
            $this->assertTrue($response); 
        }
    }

?>