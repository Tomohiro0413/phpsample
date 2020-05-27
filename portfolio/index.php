<?php 
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>リアルタイム年収</title>
    <link rel="stylesheet" href="/style.css" />
</head>
<body>
    <div class="header">
        <h2 class="title">リアルタイム年収</h2>
    </div>
    <div class="salary">
        <p class="total_people"><?php ?>人の年収</p>
        <p class="total_salary"><?php ?></p>
    </div>
    <div class="other_link">
        <ul>
            <li><a href="#">20代</li>
            <li><a href="#">30代</li>
            <li><a href="#">40代</li>
            <li><a href="#">50代</li>
            <li><a href="#">60代</li>
        </ul>
    </div>
    <div class="hooder">
        <p><a href="../portfolio/logout.php">Logout</a></p>
    </div>
</body>