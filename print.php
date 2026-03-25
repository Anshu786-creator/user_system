<?php
session_start();
$user = $_SESSION['user'];
?>

<h2>Employee Details</h2>

<p>Name: <?php echo $user['first_name']; ?></p>
<p>Email: <?php echo $user['email']; ?></p>
<p>Cadre: <?php echo $user['cadre']; ?></p>

<button onclick="window.print()">Print</button>