<?php

class Reminder {



    public function __construct() {
        // Optional initialization
    }
    // get all reminders
    public function get_all_reminders() {
        $db = db_connect();
        $stmt = $db->prepare("SELECT * FROM reminders");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // get one reminder by id

    public function get_reminder_by_id($id) {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM reminders WHERE id = ?");
        $statement->execute([$id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
        // create reminder
    public function create_reminder($subject, $user_id) {
            $db = db_connect();
            $stmt = $db->prepare("INSERT INTO reminders (subject, user_id) VALUES (?, ?)");
            return $stmt->execute([$subject, $user_id]);
    }

    

 
    


    
}


?>

