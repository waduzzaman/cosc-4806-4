<?php

class Reminder {



    public function __construct() {
        // Optional initialization
    }

    public function get_all_reminders() {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM reminders;");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function update_reminder($reminder_id) {
        $db = db_connect();
       //do updaste statement here
    }
    }


?>