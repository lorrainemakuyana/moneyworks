<?php
require_once (dirname(__FILE__)).'../../settings/db_class.php';
class ResourceHub extends Database {

    public function addExpense($user_id, $description, $amount, $category) {
        $sql = "INSERT INTO `expenses` (`user_id`, `description`, `amount`, `category`) VALUES ('$user_id', '$description', '$amount', '$category')";
        return $this->db_query($sql);
    }

    public function addInvestment($user_id, $type, $profit, $loss, $daily_earning, $end_date) {
        $sql = "INSERT INTO `investments` (`user_id`, `type`, `profit`, `loss`, `daily_earning`, `end_date`) VALUES ('$user_id', '$type', '$profit', '$loss', '$daily_earning', '$end_date')";
        return $this->db_query($sql);
    }

    
}

?>