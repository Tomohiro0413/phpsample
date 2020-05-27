<?php 
require('/Applications/MAMP/htdocs/portfolio/password.php');
session_start();

$db['host'] = "localhost";
$db['user'] = "root";
$db['pass'] = "root";
$db['dbname'] = "mini_bbs";

$errorMessage = "";
$signUpMessage = "";


//ログインボタンが押された時の挙動

if (isset($_POST['signUp'])) {
    if (empty($_POST['username'])) {
        $errorMessage = 'ユーザーIDが未入力です。';
    }else if (empty($_POST['password'])){
        $errorMessage = 'パスワードが未入力です。';
    }else if (empty($_POST['password2'])) {
        $errorMessage = 'パスワードが未入力です。';
    }

if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password2']) && $_POST['password'] === $_POST['password2']){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $dsn = sprintf('mysql:host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);
    var_dump($dsn);

    try {
        $pdo = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        $stmt = $pdo->prepare('INSERT INTO user(name, password) VALUES(?, ?)');

        $stmt->execute(array($username, password_hash($password, PASSWORD_DEFAULT)));
        $userid = $pdo->lastInsertId();
        $signUpMessage = '登録が完了しました'. $username. 'です。パスワードは'.$password.'です。';

    }catch (PDOException $e) {
    $errorMessage = "データベースエラー";
    $e->getMessage();
    echo $e->getMessage();
    }
}else if ($_POST['password'] != $_POST['password2']) {
        $errorMessage = "パスワードが一致しません" ;
}
}

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>リアルタイム年収 | 新規登録</title>
    <link rel="stylesheet" href="/style.css" />
</head>
<body>
        <h1>新規登録画面</h1>
        <form id="loginForm" name="loginForm" action="" method="POST">
            <fieldset>
                <legend>新規登録フォーム</legend>
                <div><font color="#ff0000"><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></font></div>
                <div><font color="#0000ff"><?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?></font></div>
                <label for="username">ユーザー名</label>
                <input type="text" id="username" name="username" placeholder="ユーザー名を入力" value="<?php if (!empty($_POST["username"])) {echo htmlspecialchars($_POST["username"], ENT_QUOTES);} ?>">
                <br>
                <label for="password">パスワード</label><input type="password" id="password" name="password" value="" placeholder="パスワードを入力">
                <br>
                <label for="password2">パスワード(確認用)</label><input type="password" id="password2" name="password2" value="" placeholder="再度パスワードを入力">
                <br>
                <input type="submit" id="signUp" name="signUp" value="新規登録">
            </fieldset>
        </form>
        <br>
        <form action="Login.php">
            <input type="submit" value="戻る">
        </form>
</body>
</html>