<?php 
    require('/Applications/MAMP/htdocs/salary/dbconnect.php');

    //平均年収と人数を取得
    $querys = $db->query('SELECT AVG(salary), COUNT(*) FROM user_info'); 
    $query = $querys->fetch();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>リアルタイム年収</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="tilte">
        <h1>リアルタイム年収</h1>
    </div>
    <div class="salary_people">
        <?php echo htmlspecialchars($query['COUNT(*)'], ENT_QUOTES); ?>人の平均年収<br> 
        <div class="salary">¥<?php echo htmlspecialchars($query['AVG(salary)'], ENT_QUOTES) ;?></div>
        <p><a href="../salary/input.php">登録</a></p>
        <p><a href="../salary/login.php">ログイン</a></p>
    </div>
    <div class="link">
        <li>
            <ul>20<a href=""></a></ul>
            <ul>30</ul>
            <ul>40</ul>
            <ul>50</ul>
            <ul>60</ul>
        </li>
    </div>
</body>
</html>