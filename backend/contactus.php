<?php
include('conn.php');
//print_r($_POST);

if(isset($_POST['contactformsubmit'])) {
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $sql = "insert into contactus (first_name, last_name, mobile, email_id, subject, message, status) values('$firstname', '$lastname','$phone', '$email', '$subject', '$message', 0) ";
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
        $contactus = 1;
      } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        $contactus = 2;
      }
}

?>