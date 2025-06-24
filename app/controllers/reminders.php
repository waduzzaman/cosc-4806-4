<?php

class Reminders extends Controller {
  public function index() {
    $R = $this->model('Reminder');
    $list_of_reminders = $R->get_all_reminders();
    $this->view('reminders/index',['reminders' => $list_of_reminders]);
  }
  // Create Reminder

  public function create() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $subject = trim($_POST['subject']);
      $user_id = $_SESSION['userid']; 

      $R = $this->model('Reminder');
      $R->create_reminder($subject, $user_id);

      header('Location: /reminders');
      exit;
    }
  }



  
  
}
