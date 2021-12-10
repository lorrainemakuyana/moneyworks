<?php

    include_once (dirname(__FILE__)).'../../classes/input_class.php';

    function addExpense($username, $description, $amount, $category) {
        $request = new Moneyworks; 
        $runQuery = $request->addExpense($username, $description, $amount, $category);              
        if($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function getExpense($id) {
        $request = new Moneyworks; 
        $runQuery = $request->getExpense($id); 
        if ($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }

    function deleteExpense($id) {
        $request = new Moneyworks; 
        $runQuery = $request->deleteExpense($id);
        if($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function getUserExpenses($username) {
        $request = new Moneyworks; 
        $runQuery = $request->getUserExpenses($username);
        if($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function addInvestment($username, $type, $description, $profit, $amount) {
        $request = new Moneyworks; 
        $runQuery = $request->addInvestment($username, $type, $description, $profit, $amount);
        if($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function deleteInvestment($id) {
        $request = new Moneyworks;
        $runQuery = $request->deleteInvestment($id); 
        if ($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }

    function getUserInvestments($username) {
        $request = new Moneyworks; 
        $runQuery = $request->getUserInvestments($username);
        if($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function addBalance($username, $amount) {
        $request = new Moneyworks;
        $runQuery = $request->addBalance($username, $amount);
        if ($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }

    function getBalance($username) {
        $request = new Moneyworks;
        $runQuery = $request->getBalance($username);
        if ($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }

    function updateBalance($username, $balance) {
        $request = new Moneyworks;
        $runQuery = $request->updateBalance($username, $balance);
        if ($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }

    function addUser($email, $username, $password) {
        $request = new Moneyworks;
        $protected_password = md5($password); 
        $runQuery = $request->addUser($email, $username, $protected_password); 
        if ($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function validateUserCredentials($username, $email) {
        $request = new Moneyworks; 
        $runQuery = $request->validateUserCredentials($username, $email); 
        if ($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function login($username, $password) {
        $request = new Moneyworks;
        $protected_password = md5($password);
        $runQuery = $request->login($username, $protected_password); 
        if ($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function getUserInfo($username) {
        $request = new Moneyworks; 
        $runQuery = $request->getUserInfo($username); 
        if ($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function changePassword($username, $newpassword) {
        $request = new Moneyworks; 
        $protected_password = md5($newpassword);
        $runQuery = $request->changePassword($username, $protected_password); 
        if ($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function getAllUsersInvestments() {
        $request = new Moneyworks; 
        $runQuery = $request->getAllUsersInvestments(); 
        if ($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }
?>