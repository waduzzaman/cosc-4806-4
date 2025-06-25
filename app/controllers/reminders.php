<?php

class Reminders extends Controller {
  public function index() {
    $R = $this->model('Reminder');
    $list_of_reminders = $R->get_all_reminders();
    $this->view('reminders/index',['reminders' => $list_of_reminders]);
  }
  

  public function create() {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $subject = trim($_POST['subject']);
      $user_id = $_SESSION['userid']; 

      if (!empty($subject)) {
          $db = db_connect();
          $stmt = $db->prepare("INSERT INTO reminders (subject, user_id) VALUES     (:subject, :user_id)");
          $stmt->bindValue(':subject', $subject);
          $stmt->bindValue(':user_id', $user_id);
          $stmt->execute();
          header('Location: /reminders');
          exit;
      }
  }
    $this->view('reminders/create');
  }
  // udpate reminder
  public function update($id) {
    $R = $this->model('Reminder');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $subject = trim($_POST['subject']);
      $R->update_reminder($id, $subject);
      echo '<script>window.location.href="/reminders";</script>';   
      exit;
    }

    $reminder = $R->get_reminder_by_id($id);
    $this->view('reminders/update', ['reminder' => $reminder]);
  }

  // delete reminder
 
  public function delete($id) {
    $R = $this->model('Reminder');
    $R->delete_reminder($id);
    // header('Location: /reminders');
    // exit;
    echo '<script>window.location.href="/reminders";</script>';
    exit;  
  }

  // complete reminder
  public function complete($id) {
    $R = $this->model('Reminder');
    $R->complete_reminder($id);
    // header('Location: /reminders');
     echo '<script>window.location.href="/reminders";</script>';
    exit;
  }

  
  
}
