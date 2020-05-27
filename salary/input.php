<?php 
session_start();

if (isset($_POST['signup'])){
    if (!empty($_POST)) {
        if ($_POST['addres'] == '') {
            $error['addres'] = 'blank';
        }
        if (strlen($_POST['password' == '']) < 4) {
            $error['password'] = 'length';
        }
        if ($_POST['age'] == ''){
            $error['age'] = 'blank';
        }
        if ($_POST['salary'] == '') {
            $error['salary'] = 'blank';
        }
        if (empty($error)) {
            $_SESSION['join'] = $_POST;
        }

    }
}

    //ユーザー名の重複チェック
    if (empty($error)) {
        $member = $db->prepare('SELECT COUNT(*) AS cnt FROM user_info WHERE addres=?');
        $member->execute(array($_POST['addres']));
        $record = $member->fetch();
        if ($record['cnt'] >= 0) {
            $error['addres'] = 'duplicate';
        }
    }
    if ($_REQUEST['action'] == 'rewrite') {
        $_POST = $_SESSION['join'];
        $error['rewrite'] = true;
    }

?>
<!doctype html>
<html>
<h2>ユーザー登録</h2>
<form action="" method="post" enctype="multipart/form-data">
    <textarea name="addres" cols="30" rows="1" placeholder="メールアドレス"></textarea>
    <?php if ($error['addres'] == 'blank') :?>
        <p class="error">＊メールアドレスを入力してください</p>
    <?php endif; ?>
    <?php if ($error['addres'] == 'duplicate'): ?>
        <p class="error">＊指定されたアドレスは登録済みです</p>
    <?php endif;?>
    <textarea name="password" cols="30" rows="1" placeholder="パスワード"></textarea>
    <?php if ($error['password'] == 'length') :?>
        <p class="error">＊パスワードは4文字以上入力してください</p>
    <?php endif; ?>
    <textarea name="age" cols="30" rows="1" placeholder="年齢"></textarea>
    <?php if ($error['age'] == 'blank') :?>
        <p class="error">＊年齢を入力してください</p>
    <?php endif; ?>
    <textarea name="salary" cols="30" rows="1" placeholder="年収"></textarea>
    <?php if ($error['salary'] == 'blank') :?>
        <p class="error">＊年収を入力してください</p>
    <?php endif; ?>
    <textarea name="job" cols="30" rows="1" placeholder="業界"></textarea>
    <?php if ($error['job'] == 'blank') :?>
        <p class="error">＊仕事の業界を入力してください</p>
    <?php endif; ?>
    <button type="submit" name="signup">登録する</button>
</form>
</html>