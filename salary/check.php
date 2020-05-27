<?php 
session_start();
require('/Applications/MAMP/htdocs/salary/dbconnect.php');

//login済みの場合はTOPページへ
if (isset($_SESSION['addres'])) {
    header('Location: index.php');
    exit;
    }

if (!empty($_POST)) {
    //登録処理をする
    $insert = $db->prepare('INSERT INTO user_info set addres=?, password=?, age=?, salary=?, job=?, created=NOW()');
    $insert->execute(array(
        $_SESSION['addres'],
        sha1($_SESSION['password']),
        $_SESSION['age'],
        $_SESSION['salary'],
        $_SESSION['job']
     ));
     unset($_SESSION['join']);

     header('Location: index.php');
     exit();
    }
?>

<form action="" method="post">
    <input type="hidden" name="action" value="submit" />
    <dl>
        <dt>メールアドレス</dt>
        <?php htmlspecialchars($_SESSION['join']['addres'], ENT_QUOTES);?>
        <dt>passwordは表示されません</dt>
        <dt>年齢</dt>
        <?php htmlspecialchars($_SESSION['join']['age'], ENT_QUOTES); ?>
        <dt>年収</dt>
        <?php htmlspecialchars($_SESSION['join']['salary'], ENT_IGNORE); ?>
        <dt>仕事</dt>
        <?php htmlspecialchars($_SESSION['join']['job'], ENT_IGNORE); ?>
    </dl>
</form>