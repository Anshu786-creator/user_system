<?php
include 'db.php';

$emp_id = $_POST['emp_id'];

$result = $conn->query("SELECT * FROM users WHERE emp_id='$emp_id'");

if($result->num_rows == 1){
    $user = $result->fetch_assoc();
    session_start();
    $_SESSION['user'] = $user;
    header("Location: print.php");
} else {
    echo "Invalid ID";
}
?>