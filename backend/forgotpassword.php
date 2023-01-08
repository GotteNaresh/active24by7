<?php
include('conn.php');
if(isset($_POST['forgotpasswordformsubmit'])) {
$email_id = isset($_POST['email']) ? $_POST['email'] : 0;
$sql = "select user_id, email_id, first_name, last_name, mobile, status  from users where email_id ='$email_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    $forgotpasswordstatus = 1;
    while($row = $result->fetch_assoc()) {
        //print_r($row);
        $first_name = isset($row['first_name']) ? $row['first_name'] : '';
        $last_name = isset($row['last_name']) ? $row['last_name'] : '';
        $mobile = isset($row['mobile']) ? $row['mobile'] : '';
    }
    } else {
    $forgotpasswordstatus = 2;
    }
}
$conn->close();