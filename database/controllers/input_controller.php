<?php

    include_once (dirname(__FILE__)).'../../classes/input_class.php';

    function addExpense($user_id, $description, $amount, $category) {
        $request = new Moneyworks; 
        $runQuery = $request->addExpense($user_id, $description, $amount, $category);              
        if($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function updateExpense($id, $description, $amount, $category) {
        $request = new Moneyworks; 
        $runQuery = $request->updateExpense($id, $description, $amount, $category); 
        if ($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }

    function removeExpense($id) {
        $request = new Moneyworks; 
        $runQuery = $request->removeExpense($id);
        if($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function addInvestment($user_id, $type, $profit, $loss, $daily_earning, $end_date) {
        $request = new Moneyworks; 
        $runQuery = $request->addInvestment($user_id, $type, $profit, $loss, $daily_earning, $end_date); 
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

    function updateInvestment($id, $type, $profit, $loss, $daily_earning, $end_date) {
        $request = new Moneyworks;
        $runQuery = $request->updateInvestment($id, $type, $profit, $loss, $daily_earning, $end_date); 
        if ($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }

    function addBalance($id, $amount) {
        $request = new Moneyworks;
        $runQuery = $request->addBalance($id, $amount);
        if ($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }

    function addIncome($id, $amount, $description) {
        $request = new Moneyworks;
        $runQuery = $request->addIncome($id, $amount, $description);
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
?>