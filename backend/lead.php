<?php
include('conn.php');
//print_r($_POST);

if(isset($_POST['leadformsubmit'])) {
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $countrycode = isset($_POST['countrycode']) ? $_POST['countrycode'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $slot = isset($_POST['slot']) ? $_POST['slot'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $course = isset($_POST['course']) ? $_POST['course'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $sql = "insert into leads (first_name, last_name, country_code, mobile, email_id, time_slot, title, course, message, status) values('$firstname', '$lastname', '$countrycode', '$phone', '$email', '$slot', '$title', '$course', '$message', 0) ";
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
        $leadstatus = 1;
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $leadstatus = 2;
      }
}

?>