<?php
include 'db.php';

$emp_id = "EMP" . rand(1000,9999);

$pin = $_POST['pin'];
$email = $_POST['email'];

// Check duplicate
$check = $conn->query("SELECT * FROM users WHERE esic_pin='$pin' OR email='$email'");

if($check->num_rows > 0){
    echo "PIN or Email already exists";
    exit();
}

$sql = "INSERT INTO users (emp_id, salutation, first_name, last_name, cadre, rank_name, purpose, other_purpose, esic_pin, email)
VALUES ('$emp_id','$_POST[salutation]','$_POST[fname]','$_POST[lname]','$_POST[cadre]','$_POST[rank]','$_POST[purpose]','$_POST[other]','$pin','$email')";

$conn->query($sql);

header("Location: success.php?emp_id=$emp_id");
?>