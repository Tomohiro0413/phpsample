<?php 
    require('/Applications/MAMP/htdocs/salary/dbconnect.php');




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>リアルタイム年収</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
    <h2>Login From</h2>
        <form action="input_do.php" method="post">
            <textarea name="user_id" cols="30" rows="5">
            </textarea>
            <?php if ($error['user_id'] = 'blank') :?>
                <p class="error">ユーザIDを入力してください</p>
            <?php endif; ?>
            <br><p></p>
            <textarea name="password" cols="30" rows="5">
            </textarea>
            <?php if ($error['password'] = 'blank') :?>
                <p class="error">パスワードを入力してください</p>
            <?php endif; ?>
            <button type="submit">Login</button>
        </form>
    <p><a href="../salary/index.php">トップページ</a></p>
</body>
</html>