<?php
include('conn.php');
print_r($_POST);
if(isset($_POST['loginformsubmit'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    echo $sql = "select user_id from users where email_id ='$username' and password =md5('$password')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    $loginstatus = 1;
    while($row = $result->fetch_assoc()) {
        $user_id = isset($row['user_id']) ? $row['user_id'] : '';
        $_SESSION['user_id'] = $user_id;
    }
    } else {
    $loginstatus = 2;
    }
    $conn->close();
}

?>