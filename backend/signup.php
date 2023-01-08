<?php
include('conn.php');
//echo "<pre>";
//print_r($_POST);

if(isset($_POST['signupformsubmit'])) {
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $countrycode = isset($_POST['countrycode']) ? $_POST['countrycode'] : '';
    $mobile = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $sql = "select user_id from users where email_id ='$email'";
    $result = $conn->query($sql);
    $signupstatus = '';
    if ($result->num_rows > 0) {
      //$signupstatus = "Your email id already in use. Please try with another email id!.";
      $signupstatus = 3;
    } else {
    $sql = "insert into users (first_name, last_name, country_code, mobile, email_id, city, password, status) 
    values('$firstname', '$lastname', '$countrycode', '$mobile', '$email', '$city', md5('$password'), 0) ";
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
        $signupstatus = 1;
      } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        $signupstatus = 2;
      }

    }
}

?>