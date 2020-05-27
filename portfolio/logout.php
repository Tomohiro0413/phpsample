<?php
session_start();

if (isset($_SESSION['NAME'])){
    $error_message = 'ログアウトしました';
}else {
    $error_message = 'セッションがタイムアウトしました';
}

$_SESSION = array();

session_destroy();

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>リアルタイム年収 | ログアウト</title>
    <link rel="stylesheet" href="/style.css" />
</head>
<body>
    <h1>ログアウト画面</h1>
        <div><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></div>
        <ul>
            <li><a href="Login.php">ログイン画面に戻る</a></li>
        </ul>
</body>