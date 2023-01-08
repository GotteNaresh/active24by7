<?php
include('conn.php');
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
$sql = "select user_id, email_id, first_name, last_name, mobile, status  from users where user_id ='$user_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    $loginstatus = 1;
    while($row = $result->fetch_assoc()) {
        $user_id = isset($row['user_id']) ? $row['user_id'] : '';
        $email_id = isset($row['email_id']) ? $row['email_id'] : '';
        $first_name = isset($row['first_name']) ? $row['first_name'] : '';
        $last_name = isset($row['last_name']) ? $row['last_name'] : '';
        $mobile = isset($row['mobile']) ? $row['mobile'] : '';
        $_SESSION['user'] = $row;
        $_SESSION['email_id'] = $email_id;
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['mobile'] = $mobile;
    }
    } else {
    $loginstatus = 2;
    }
$conn->close();