<?php 
session_start();
require('/Applications/MAMP/htdocs/portfolio/dbconnect.php');

?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>リアルタイム年収 | 40代</title>
    <link rel="stylesheet" href="/style.css" />
</head>
<body>
    <div class="header">
        <h2 class="title">40代リアルタイム年収</h2>
    </div>
    <div class="salary">
        <p class="total_people"><?php ?>人の年収</p>
        <p class="total_salary"><?php ?></p>
    </div>
    <div class="hooder">
        <p><a href="../portfolio/index.php">Logout</a></p>
    </div>
</body>
